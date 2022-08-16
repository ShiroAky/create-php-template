<?php

    // Crear el namespace de la aplicación
    namespace App;

    // Render class
    class Render
    {
        
        // Render view
        public static function view(string $view, $data = null) 
        {

            // Ajustar los valores de la vista
            $view = str_replace(' ', '', $view);

            // Verificar si existe la vista
            if (file_exists('./src/views/' . $view . '.php')) { 

                // Si existe, incluir la vista
                require_once './src/views/' . $view . '.php';

            } else { 

                // Si no existe, mostrar error
                Render::error(404); 
                
            }

        }

        // Render error
        public static function error(int $code) 
        {
            // Envio de cabeceras
            http_response_code($code);

            // Envio de la respuesta
            require_once './src/views/errors/error_' . $code . '.php';

        }

        // Render module:
        public static function module(string $module, $data = null, $complement = null) 
        {
            // Ajustar los valores de la vista
            $module = str_replace(' ', '', $module);

            if (file_exists('./src/modules/' . $module . '.php')) { 
                require './src/modules/' . $module . '.php'; 
            } else { Render::error(404); }

        }

    }