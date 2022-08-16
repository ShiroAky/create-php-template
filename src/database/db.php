<?php

    // Crear el namespace de la base de datos:
    namespace Database;

    // Usar namespaces:
    use mysqli;

    // Crear la clase Database
    class DB
    {

        // Crear la conexión a la base de datos:
        public static function connect()
        {

             // Valores de la base de datos:
             $host = 'host';
             $user = 'user';
             $pass = 'password';
             $db_name = 'database';
            
            // Crear la conexón a la base de datos
            $db = new mysqli($host, $user, $pass, $db_name);

            // Verificar la conexión a la base de datos:
            if ($db->connect_error) {

                // Devolver error de conexión
                die('Error de conexión: ' . $db->connect_error);

            } else {

                // Devolver la conexión a la base de datos
                return $db;
                
            }

        }

        // Crear la función para ejecutar consultas:
        public static function query(string $query)
        {
            // Ejecutar la conexión a la base de datos:
            $db = DB::connect();

            // Ejecutar la consulta:
            $result = $db->query($query);

            // Cerrar la conexión a la base de datos:
            $db->close();

            // Devolver el resultado de la consulta:
            return $result;
            
        }
        
    }