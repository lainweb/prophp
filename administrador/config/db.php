

<?php 

$server='localhost';
$username='root';
$password='';
$database='maki';

$conexion = new mysqli($server, $username, $password, $database);

if($conexion->connect_error){
	die("Conexi贸n fallida: " . $conexion->connect_error);
}

 ?>
