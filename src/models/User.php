<?php

    // Crear el namespace:
    namespace Models;

    require_once './src/database/db.php';
    require_once './src/controllers/URL.php';
    require_once './src/controllers/Utils.php';

    // Usar namespaces:
    use Database\DB;
    use Controllers\URL;
    use Controllers\Utils;

    // Crear la clase User:
    class User
    {

        // Crear la función para registrar un nuevo usuario:
        public static function register(string $name, string $email, string $password)
        {

            $token = Utils::generateToken();

            // Crear la consulta:
            $query = "INSERT INTO `users` (`token`, `usuario`, `correo`, `contraseña`, `role_id`) VALUES ('$token', '$name', '$email', '$password', '2');";

            // Ejecutar la consulta:
            DB::query($query);

        }

        public static function addAdmin(string $name, string $email, string $password)
        {

            $token = Utils::generateToken();

            // Crear la consulta:
            $query = "INSERT INTO `users` (`token`, `usuario`, `correo`, `contraseña`, `role_id`) VALUES ('$token', '$name', '$email', '$password', '1');";

             // Ejecutar la consulta:
            DB::query($query);

        }

        // Crear la función para iniciar sesión:
        public static function login(string $email, string $password)
        {

            $email = Utils::encryptData($email);
            $password = Utils::encryptData($password);

            // Crear la consulta:
            $query = "SELECT * FROM `users` WHERE `correo` = '$email' AND `contraseña` = '$password' LIMIT 1;";

            // Ejecutar la consulta:
            $user = DB::query($query);
            
            // Contar el número de registros:
            $count = $user->num_rows;

            // Si el número de registros es mayor a 0:
            if ($count > 0) {

                // Obtener el token:
                $data = $user->fetch_assoc();

                // print_r($data);

                $role = $data['role_id'];
                $user = $data['usuario'];

                if ($role == 1) {
                    $user_role = 'Admin';
                } else {
                    $user_role = 'Estandar';
                }

                // Crear la sesión:
                User::create($user, $user_role);

                // Redireccionar a la página de inicio:
                // header('Location: ' . URL::get());

                echo '<script>window.location.href = "' . URL::get() . '";</script>';

            } else {

                // Redireccionar a la página de inicio:
                header('Location: ' . URL::get() . 'login');

            }

        }

        // Crear la función para cerrar sesión:
        public static function logout()
        {

            // Eliminar la sesión:
            session_destroy();

            // Limpiar la sesión:
            session_unset();

            // Abortar la sesión:
            session_abort();

            // Resetear la sesión:
            session_reset();
            
            // Redireccionar al inicio:
            header('Location: /');
            
        }

        // Crear la función para validar si el usuario está logueado:
        public static function isLogged(string $type = null)
        {
            // Validar si la sesión está iniciada:
            if (isset($_SESSION['user']) && $_SESSION['user'] != '') {

                // Role:
                $role = $_SESSION['user_role'];
                $role = ($role == 'Admin') ? $role = 'dashboard/' : $role = '';

                // Retornar true:
                return true;

            } else {

                // Devolver false:
                return false;

            }
        }

        // Crear la función para validar si el usuario es administrador:
        public static function isAdmin()
        {
            // Validar si el usuario es administrador:
            if (isset($_SESSION['user']) && $_SESSION['user_role'] == 'Admin') {

                // Retornar true:
                return true;

            } else {

                // Retornar false:
                return false;

            }
        }

        // Crear la función para crear las seccion del usuario:
        public static function create(string $user, string $user_role)
        {
            // Crear la sesión:
            $_SESSION['user'] = $user;
            $_SESSION['user_role'] = $user_role;
        }

    }