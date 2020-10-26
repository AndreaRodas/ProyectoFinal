<?php

include ("conexion_cliente.php");



if (isset($_POST['guardar_cliente'])){
     $nombre_apellido = $_POST['nombre_apellido'];
     $nit = $_POST['nit'];
     $telefono = $_POST['telefono'];
     $direccion = $_POST['direccion'];
    
     
    
     $query = "INSERT INTO  clientes(nombre_apellido, nit, telefono, direccion) 
    VALUES ('$nombre_apellido', '$nit', '$telefono', '$direccion')";
     $result = mysqli_query ($conn, $query);
     if (!$result){
         die("Query Failed");
     }

      $_SESSION['message'] = 'Cliente Guardado';
      $_SESSION['message_type'] = 'info';

      header ("Location: clientes.php");
}

?>