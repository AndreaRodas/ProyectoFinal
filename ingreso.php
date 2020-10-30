<?php 

include ("conexion_cliente.php");

session_start();

$user=$_POST['nombre'];
$pass=$_POST['password'];

$query = "SELECT * FROM usuario where nombre='$user' and password ='$pass' ";
$result = mysqli_query($conn, $query);

$res = mysqli_num_rows($result);

if ($res>0) {
	$_SESSION['nombre'] = $user;

	header("location: principal.php");
}else{
	header("location: index.php");
}





?>