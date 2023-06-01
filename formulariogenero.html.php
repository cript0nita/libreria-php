<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
   <!-- BEGIN: ERRORES -->
   <?php if (isset($errores) && $errores): ?>
        <?php echo $errores; ?>
    <?php endif; ?>
    <!-- END: ERRORES -->

    <!-- MENSAJES -->
    <?php if (isset($mensaje) && $mensaje): ?>
        <?php echo $mensaje; ?>
    <?php endif; ?>
    <!-- END: MENSAJES -->

    <h2>Introduzca género literario</h2>
    <form method="POST">

        <label>Descripcion</label>
        <input type="text" name="descripcion">

        <input type="submit" name="Guardar">
    </form>
    <!-- END: FORMULARIO -->
    <hr>
    <a href="index.php" class="button">Menú principal</a>
</body>
</html>