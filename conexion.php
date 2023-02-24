<?php

    function establecer_conexion() {
        $conexion = mysqli_connect("localhost", "agustin", "Ireliagod1!", "apirest");
        return $conexion;
      }
      
      $sql = "SELECT * FROM usuarios";
      $resultado = mysqli_query(establecer_conexion(), $consulta);
      $registros = array();

      while ($fila = mysqli_fetch_assoc($resultado)) {
        $registros[] = $fila;
      }

      $json = json_encode($registros);
      echo $json;
      mysqli_close($conexion);

      

?>