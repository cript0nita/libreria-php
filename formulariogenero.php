<?php
include('conexion.php');
$Conexion = new Connection();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // RECOGIDA DE DATOS DEL FORMULARIO
    $descripcion = $_REQUEST['descripcion'];

    
    // VALIDACION
    $errores = "";
    if (trim($descripcion) == "") {
     $errores .= "<li>Falta la descripcion</li>";
    }

    if (!$errores) {
        // INSERCION 
        $query = "INSERT INTO genero (descripcion) VALUES ('$descripcion')";
        $resultado = $Conexion->query($query);

        if ($resultado == true) {
            $mensaje = "<li>Registro correcto</li>";
        }
    }

}



include('formulariogenero.html.php');