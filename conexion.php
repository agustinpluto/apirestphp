<?php

    function establecer_conexion() {
        $conn = mysqli_connect("localhost", "agustin", "Ireliagod1!", "apirest");
        echo "Conexión establecida";
      }
      
      establecer_conexion();

      if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
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