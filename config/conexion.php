<?php
      $server = "localhost";
      $user = "jorgxuje_usuario_crud_php";
      $pass = "cazador*807";
      $db = "jorgxuje_crud_php";

      $conexion = new mysqli($server, $user, $pass, $db);

      if($conexion->connect_error){
            die("Error en la conexion con base de datops: " . $conexion->connect_error);
      }else{
            //echo "conexion exitosa";
      }

?>