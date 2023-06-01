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

    <!-- BEGIN: FORMULARIO -->
    <h2>Introduzca datos</h2>
    
    <form method="POST">

        <label>Título</label>
        <input type="text" name="titulo">

        <label>Genero</label>
        <br>
        <select name="genero">
            <option value="">-- Selecciona --</option>
            <?php foreach($genero as $genero): ?>
                <option value="<?php echo $genero['id_genero']; ?>">
                    <?php echo $genero['descripcion']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>

        <br>
        <label>Público</label><br>
        <input type="checkbox" id="infantil" name="publico[]" value="Infantil">
        <label for="infantil">Literatura infantil</label><br>

        <input type="checkbox" id="adulto" name="publico[]" value="adulto">
        <label for="internacional">Literatura adulto</label><br>

        <input type="checkbox" id="extranjero" name="publico[]" value="extrangero">
        <label for="internacional">Literatura internacional</label><br>

        <input type="submit" value="guardar">
    </form>

    <hr>
    <a href="index.php" class="button">Menú principal</a>
</body>
</html>