<?php require_once './src/app/Render.php'; ?>
<?php require_once './src/controllers/URL.php'; ?>

<?php use App\Render; ?>
<?php use Controllers\URL; ?>

<?php  ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Styles css -->
    <link rel="stylesheet" href="<?php URL::url_for('css', 'normalize.css'); ?>">
    <link rel="stylesheet" href="<?php URL::url_for('css', 'general.css'); ?>">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php URL::url_for('img', 'logo.png'); ?>" type="image/png">
</head>
<body>

    <!-- Scripts -->
    <script src="<?php URL::url_for('js', 'main.js'); ?>"></script>
    
</body>
</html>