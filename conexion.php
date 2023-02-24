<?php

    function establecer_conexion() {
        $conn = mysqli_connect("localhost", "agustin", "Ireliagod1!", "apirest");
        echo "Conexión establecida";
      }
      
      establecer_conexion();

?>