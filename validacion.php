<?php
session_start();
require_once 'conexion.php';
$nombre = $_REQUEST ['nombre'];
$contraseña = $_REQUEST ['contraseña'];
$sql=("select * from usuario where nombre='$nombre' and contraseña ='$contraseña'");
$result = mysqli_query($sql);
$num_res = mysqli_fetch_array($result);
if($num_res>0){
    header("Location: principal.php");
    }else{
        header("Location: index.php");
    }
?>