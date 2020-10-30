<?php

include ("conexion_reparacion.php");



if (isset($_POST['guardar_reparacion'])){
     $falla = $_POST['falla'];
     $observaciones_tecnicas = $_POST['observaciones_tecnicas'];
     $fecha_ingreso = $_POST['fecha_ingreso'];
     $fecha_egreso = $_POST['fecha_egreso'];
     $observacion_final = $_POST['observacion_final'];
     $repuesto = $_POST['nombre_repuesto'];
    
     $query = "INSERT INTO  reparacion(falla, observaciones_tecnicas, fecha_ingreso, fecha_egreso, observacion_final,id_repuestos) 
    VALUES ('$falla', '$observaciones_tecnicas', '$fecha_ingreso', '$fecha_egreso', '$observacion_final','$repuesto')";
     $result = mysqli_query ($conn, $query);
     if (!$result){
         die("Query Failed");
     }

      $_SESSION['message'] = 'Reparación Guardada';
      $_SESSION['message_type'] = 'info';

      header ("Location: principal.php");
}

?> 