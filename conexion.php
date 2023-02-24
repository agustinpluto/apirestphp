<?php

    function establecer_conexion() {
        $conn = mysqli_connect("localhost", "agustin", "Ireliagod1!", "apirest");
        echo "Conexión establecida";
      }
      
      $consulta = mysqli_prepare($conexion, "SELECT * FROM usuarios");
      mysqli_stmt_bind_param($consulta, "s", $valor_a_buscar);
      mysqli_stmt_execute($consulta);
      $resultado = mysqli_stmt_get_result($consulta);
      while ($fila = mysqli_fetch_assoc($resultado)) {
        echo $fila["nombre_de_campo"];
      }
      mysqli_close($conexion);
      
      establecer_conexion();

?>