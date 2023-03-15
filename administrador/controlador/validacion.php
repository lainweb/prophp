<?php
include('../config/db.php');




$correoPersona = $_POST['correoPersona'];
$contrasenaPersona = $_POST['contrasenaPersona'];

$sql = "SELECT * FROM persona WHERE correoPersona = '$correoPersona' ";
$resultado = $conexion->query($sql);

$row = $resultado->fetch_assoc();


if ($row['correoPersona'] == $correoPersona) {

    if (password_verify($contrasenaPersona, $row['contrasenaPersona'])) {

        session_start();	
        $_SESSION['idPersona'] = $row['idPersona'];
        $_SESSION['idTipop'] =  $row['idTipop'];
      
        // index.php
        header("Location: ../vistas/perfilAdmin.php");
        //header('Location: ../../vistas/tipo.php');
        //echo '<script language="javascript">alert("';
        // echo $row;
        //echo '");</script>';
    } else {
        header("Location: login.php");
    }
} else {
    header("Location: login.php");
}
