<?php require_once './src/app/Render.php'; ?>
<?php require_once './src/controllers/URL.php'; ?>
<?php require_once './src/models/Animes.php'; ?>

<?php use App\Render; ?>
<?php use Controllers\URL; ?>
<?php use Models\Animes; ?>

<?php  ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeLine</title>
    <!-- Styles css -->
    <link rel="stylesheet" href="<?php URL::for('css', 'normalize.css'); ?>">
    <link rel="stylesheet" href="<?php URL::for('css', 'general.css'); ?>">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php URL::for('img', 'logo.png'); ?>" type="image/png">
</head>
<body>

    <!-- Loader -->
    <?php Render::module('loader'); ?>

    <!-- Navbar -->
    <?php Render::module('nav'); ?>

    <?php $result = Animes::getAnimes(20); ?>

    <!-- Main -->
    <main class="auto-grid">

        <?php // foreach ($result as $anime) : ?>

            <?php // Render::module('anime-item', $anime); ?>

        <?php // endforeach; ?>

    </main>

    <?php ?>

    <!-- Scripts -->
    <script src="<?php URL::for('js', 'main.js'); ?>"></script>
    
</body>
</html>