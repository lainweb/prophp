<?php

include('../../config/db.php');

if (isset($_POST['agregar'])) {
  $idTipop = $_POST['idTipop'];
  $idEstado = $_POST['idEstado'];
  $rutPersona = $_POST['rutPersona'];
  $nombresPersona = $_POST['nombresPersona'];
  $apellidoPersona = $_POST['apellidoPersona'];
  $correoPersona = $_POST['correoPersona'];
  $contrasenaPersona = $_POST['contrasenaPersona'];




  $query = "INSERT INTO persona(idTipop,idEstado,rutPersona,nombresPersona,apellidoPersona,correoPersona,contrasenaPersona)
   VALUES ('$idTipop', '$idEstado', '$rutPersona', '$nombresPersona', '$apellidoPersona', '$correoPersona', '$contrasenaPersona')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: ../../inicio.php');

}

?>