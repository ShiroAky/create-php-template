<?php

    // Crear el namespace:
    namespace Controllers;

    // Crear la clase Sanetice:
    class Sanetice
    {
        
        // Crear la función para sanear una cadena:
        public static function sanearCadena(string $cadena)
        {
            
            // Remover los espacios en blanco:
            $cadena = trim($cadena);
            
            // Remover los saltos de línea:
            $cadena = str_replace("\r\n", "", $cadena);
            
            // Remover los espacios en blanco:
            $cadena = str_replace("\n", "", $cadena);
            
            // Remover los espacios en blanco:
            $cadena = str_replace("\r", "", $cadena);
            
            // Remover los espacios en blanco:
            $cadena = str_replace("\t", "", $cadena);
            
            // Remover los espacios en blanco:
            $cadena = str_replace("\0", "", $cadena);
            
            // Remover los espacios en blanco:
            $cadena = str_replace("\x0B", "", $cadena);
            
            // Remover los espacios en blanco:
            $cadena = str_replace("\x0C", "", $cadena);
            
            // Remover los espacios en blanco:
            $cadena = str_replace("\x1C", "", $cadena);
            
            // Remover los espacios en blanco:
            $cadena = str_replace("\x1D", "", $cadena);
            
            // Remover los espacios en blanco:
            $cadena = str_replace("\x1E", "", $cadena);
            
            // Remover los espacios en blanco:
            $cadena = str_replace("\x1F", "", $cadena);
            
            // Remover los espacios en blanco:
            $cadena = str_replace("\x7F", "", $cadena);
            
            // Remover los espacios en blanco:
            $cadena = str_replace("\x80", "", $cadena);

            // Remover los espacios en blanco:
            $cadena = str_replace("\x81", "", $cadena);

            // Retornar la cadena:
            return $cadena;

        }
        
    }