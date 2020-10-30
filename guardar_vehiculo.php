<?php

include ("conexion_vehiculo.php");



if (isset($_POST['guardar_vehiculo'])){
     $placa = $_POST['placa'];
     $marca = $_POST['marca'];
     $linea = $_POST['linea'];
     $modelo = $_POST['modelo'];
     $color = $_POST['color'];
     $cliente = $_POST['nombre_apellido'];
    
     $query = "INSERT INTO  vehiculo(placa, marca, linea, modelo, color, id_cliente) 
    VALUES ('$placa', '$marca', '$linea', '$modelo', '$color', '$cliente')";
     $result = mysqli_query ($conn, $query);
     if (!$result){
         die("Query Failed");
     }

      $_SESSION['message'] = 'Vehiculo Guardado';
      $_SESSION['message_type'] = 'info';

      header ("Location: repuesto.php");
}

?>