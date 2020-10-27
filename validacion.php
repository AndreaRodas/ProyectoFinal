<?php

include ("conexion_cliente.php");



if (isset($_POST['guardar'])){
     $nombre = $_POST['nombre'];
     $contraseña = $_POST['contraseña'];
     $ocultar=md5($contraseña);
     $query = "INSERT INTO  usuarios(nombre, contraseña) 
    VALUES ('$nombre', '$ocultar')";
     $result = mysqli_query ($conn, $query);
     if (!$result){
         die("Query Failed");
     }

      $_SESSION['message'] = 'Cliente Guardado';
      $_SESSION['message_type'] = 'info';

      header ("Location: principal.php");
}

?>