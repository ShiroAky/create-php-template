<?php

    // Crear el namespace:
    namespace Controllers;

    // Crear la clase URL:
    class URL
    {

        // Crear la función para obtener parametros de la URL:
        public static function params(int $index)
        {
            // Obtener la URL:
            $url = $_SERVER['REQUEST_URI'];

            // Ajustar la URL:
            $url = trim($url, '/');
            $url = preg_replace('/{[^}]+}/', '(.+)', $url);

            // Partir la URL:
            $url = explode('/', $url);

            // Retornar la URL:
            return $url[$index];
        }

        // Crear la función para obtener la URL:
        public static function get()
        {
            // Obtener el http o https:
            $protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';

            // Obtener la URL:
            $url = $protocol . $_SERVER['HTTP_HOST'] . '/';

            // Retornar la URL:
            return $url;

        }

        public static function path()
        {
            // Obtener el http o https:
            $protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';

            // Obtener la URL:
            $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            // Retornar la URL:
            return $url;

        }

        // Crear la función para generar la url hacia un recurso:
        public static function url_for(string $folder, string $file)
        {

            // Obtener la URL del recurso:
            $resource = self::get() . 'public/' . $folder . '/' . $file;

            // Retornar la URL del recurso:
            echo $resource;

        }

        // Crear la función para formatear la url:
        public static function encode(string $url)
        {

            // Ajustar la URL:
            $url = str_replace(' ', '-', $url);

            // Retornar la URL:
            return $url;

        }

        // Crear la función para formatear la url:
        public static function decode(string $url)
        {

            // Ajustar la URL:
            $url = str_replace('-', ' ', $url);

            // Retornar la URL:
            return $url;

        }

    }