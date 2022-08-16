<?php

    // Crear el namespace de la aplicación
    namespace Config;
    
    // Clase de configuración
    class Config
    {

        // Metodo de autoconfiguración
        public static function autoconfig()
        {
            // Ocultar errores
            error_reporting(0);

            // Iniciar la sesión:
            session_start();
        }

    }