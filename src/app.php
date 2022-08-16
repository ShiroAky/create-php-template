<?php

require_once './src/app/Router.php';
require_once './src/app/Render.php';
require_once './src/models/User.php';

// Uso de namespaces:
use App\Router;
use App\Render;
use Models\User;

/**
 * En este archivo se definen las rutas de la aplicación.
 * Y se renderiza la vista correspondiente.
 */

// -------------------------------------------------------------- # --------------------------------------------------------------

//  Vista de inicio.
Router::route('/', function () {
    Render::view('home');
});

// -------------------------------------------------------------- # --------------------------------------------------------------

if (User::isLogged()) {

    // Aquí se definen las rutas que requieren de un usuario logueado.

} else {

    // Aquí se definen las rutas que no requieren de un usuario logueado.

}

// -------------------------------------------------------------- # --------------------------------------------------------------

if (User::isAdmin()) {

    // Aquí se definen las rutas que requieren de un usuario logueado y de ser administrador.

}

// // Metodo para desplegar las rutas de la aplicación.
Router::run();