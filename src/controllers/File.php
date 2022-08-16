<?php

    // Crear el namespace:
    namespace Controllers;

    // Crear la clase File:
    class File
    {
        
        // Crear la función para subir un archivo:
        public static function uploadFile($file, string $folder)
        {

            // path de la carpeta destino:
            $path = 'public/img/' . $folder . '/';

            // Obtener el la extensión del archivo:
            $extension = pathinfo($file['name'], PATHINFO_EXTENSION);

            // Crear el nombre del archivo:
            $name = md5(time()) . '_' . time() . '_' . uniqid() . '.' . $extension;
            
            // Subir el archivo:
            $upload = move_uploaded_file($file['tmp_name'], $path . $name);

            // Retornar el nombre del archivo:
            return $name;
            
        }

        // Crear la función para eliminar un archivo:
        public static function deleteFile(string $file, string $folder)
        {

            // path de la carpeta destino:
            $path = 'public/img/' . $folder . '/';

            // Eliminar el archivo:
            $delete = unlink($path . $file);

            // Retornar el resultado:
            return $delete;
            
        }
        
    }