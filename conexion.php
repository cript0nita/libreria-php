<?php
class Connection {
    
    function connect() {
        $conexion = mysqli_connect("localhost","root","");
        mysqli_select_db($conexion, "libreria");
        mysqli_set_charset($conexion, 'utf8');
        return $conexion;
    }

    function query($query) {
        $conexion = $this->connect();
        $resultado = mysqli_query($conexion, $query) or die (mysqli_error($conexion));

        return $resultado;
    }

    function select($query) {
        $conexion = $this->connect();

        $consulta = mysqli_query($conexion, $query) or die (mysqli_error($conexion));
        $registros = [];
        
        while (($registro = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) != null) {
            $registros[] = $registro;
        }
        return $registros;
    }


}