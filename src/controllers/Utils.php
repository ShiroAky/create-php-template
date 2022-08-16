<?php

    // Crear el namespace:
    namespace Controllers;

    // Usar namespaces:
    use Database\DB;

    // $mail->Host = 'smtp.gmail.com';

    // Crear la clase Utils:
    class Utils 
    {

        // Crear la función para generar un token:
        public static function generateToken()
        {

            // Crear el token:
            $token = md5(time() . uniqid()) . time();

            // Retornar el token:
            return $token;

        }
        
        // Crear la función para encriptar datos:
        public static function encryptData(string $data)
        {

            // Crear el token:
            $encrypt = md5($data);
            $encrypt = sha1($encrypt);
            $encrypt = sha1($encrypt);
            $encrypt = md5($encrypt);

            // Retornar el token:
            return $encrypt;

        }

        // Crear la función para generar un codigo de verificación:
        public static function generateVerfiedCode()
        {

            // Crear el codigo:
            $code = rand(100000, 999999);

            // Guardar el codigo de verificación:
            DB::query("INSERT INTO `validate` ('code') VALUES ('$code')");

        }

        // Crear la función para verificar el codigo de verificación:
        public static function verifyCode(string $code)
        {

            // Verificar el codigo:
            $result = DB::query("SELECT * FROM `validate` WHERE `code` = '$code'");
            
            // Verificar el resultado:
            if ($result->num_rows > 0) {

                // Eliminar el codigo de verificación:
                DB::query("DELETE FROM `validate` WHERE `code` = '$code'");

                // Devolver el resultado:
                return true;

            } else {

                // Devolver el resultado:
                return false;

            }
            
        }

        // Crear la función para enviar un correo de verificación a gmail:
        public static function sendVerifiedCode(string $email, string $code)
        {

            // Crear el correo:
            $mail = mail($email, 'Verificación de correo', "Para verificar tu correo, ingresa el siguiente código: $code");

        }

    }