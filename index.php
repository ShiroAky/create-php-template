<?php

    // // Incluir la configuración:
    require_once './src/config/Config.php';

    // // Uso de namespaces:
    use Config\Config;

    // // Ejecutar la autoconfiguración:
    Config::autoconfig();

    // // Incluir la app:
    require_once './src/app.php';