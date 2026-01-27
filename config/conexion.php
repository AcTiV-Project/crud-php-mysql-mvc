<?php
      $server = "localhost";
      $user = "root";
      $pass = "";
      $db = "crud_php";

      $conexion = new mysqli($server, $user, $pass, $db);

      if($conexion->connect_error){
            die("Error en la conexion con base de datops: " . $conexion->connect_error);
      }else{
            //echo "conexion exitosa";
      }

?>