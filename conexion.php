<?php

    function establecer_conexion() {
        $conn = mysqli_connect("127.0.0.1", "agustin", "Ireliagod1!", "apirest");
        echo "Conexión establecida";
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