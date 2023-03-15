<?php

include('../../config/db.php');

if (isset($_POST['agregar'])) {
  $idEmpresa = $_POST['idEmpresa'];
  $nombreServicio = $_POST['nombreServicio'];
  $descripcionServicio = $_POST['descripcionServicio'];
  $valorServicio = $_POST['valorServicio'];
  $query = "INSERT INTO servicio(idEmpresa,nombreServicio, descripcionServicio, valorServicio) VALUES ('$idEmpresa','$nombreServicio', '$descripcionServicio', '$valorServicio')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: ../../vistas/empresas.php');

}

?>