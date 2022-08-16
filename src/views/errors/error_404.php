<?php require_once './src/app/Render.php'; ?>
<?php require_once './src/controllers/URL.php'; ?>

<?php use Proyect\Anime\App\Render; ?>
<?php use Proyect\Anime\Controllers\URL; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - No encontrado</title>
    <!-- Styles css -->
    <link rel="stylesheet" href="<?php URL::for('css', 'normalize.css'); ?>">
    <link rel="stylesheet" href="<?php URL::for('css', 'general.css'); ?>">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php URL::for('img', 'logo.svg'); ?>" type="image/svg">
</head>
<body>

    <!-- Loader -->
    <?php Render::module('loader'); ?>
    
    <!-- Contenedor de la pagina de error -->
    <div class="error-content">

        <!-- Tipo de error -->
        <h1>Error 404</h1>

        <!-- Mensaje de error -->
        <p>La pagina que estas buscando no existe o ha sido eliminada.</p>

        <!-- Link para volver al inicio -->
        <a href="<?php echo URL::get(); ?>">Volver a la página principal</a>

    </div>

    <!-- Scripts -->
    <script src="<?php URL::for('js', 'main.js'); ?>"></script>
    
</body>
</html>