<?php

include ("conexion_repuesto.php"); 



if (isset($_POST['guardar_repuesto'])){
     $nombre_repuesto = $_POST['nombre_repuesto'];
     $precio = $_POST['precio'];
     $stock = $_POST['stock'];
     $imagen_repuesto= addslashes(file_get_contents($_FILES['imagen_repuesto']['tmp_name']));
     $descripcion = $_POST['descripcion'];

     $query = "INSERT INTO  repuestos(nombre_repuesto, precio, stock, imagen_repuesto, descripcion) 
    VALUES ('$nombre_repuesto', '$precio', '$stock', '$imagen_repuesto', '$descripcion')";
     $result = mysqli_query ($conn, $query);
     if (!$result){
         die("Query Failed");
     }

      $_SESSION['message'] = 'Repuesto Guardado';
      $_SESSION['message_type'] = 'info';

      header ("Location: principal.php");
}

?>