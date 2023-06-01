<?php
include('conexion.php');
$Conexion = new Connection();

$query = "SELECT * FROM genero";
$genero = $Conexion->select($query);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // RECOGIDA DE DATOS DEL FORMULARIO
    $titulo = $_REQUEST['titulo'];
    $genero_id = $_REQUEST['genero'];

    if (isset($_REQUEST['publico'])) {
        // Une elementos de un array en un string ["infantil", "adulto"] => "infantil,adulto"
        // https://www.php.net/manual/es/function.implode.php
        $publico = implode(",", $_REQUEST['publico']);
    } else {
        $publico = "";
    }

    // VALIDACION
    $errores = "";
    if (trim($titulo) == "") {
        $errores .= "<li>Falta titulo</li>";
    }
    if (trim($genero_id) == "") {
        $errores .= "<li>Falta genero literario</li>";
    }
    

    // INSERCION
    if (!$errores) {
    
          $query = "INSERT INTO libro (titulo, genero_id, publico) VALUES ('$titulo', '$genero_id', '$publico')";
          $consulta = $Conexion->query($query);
  
          if ($consulta == true) {
              $mensaje = "<li>Registro correcto</li>";
          }
    }

}

include('formulariolibro.html.php');
