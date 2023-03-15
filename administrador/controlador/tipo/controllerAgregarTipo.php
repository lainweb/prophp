<?php

include('../../config/db.php');

if (isset($_POST['agregar'])) {
  $nombreTipoEmpresa = $_POST['nombreTipoEmpresa'];
  $descriptionTipoEmpresa = $_POST['descripcionTipoEmpresa'];
  $query = "INSERT INTO tipo(nombreTipoEmpresa, descripcionTipoEmpresa) VALUES ('$nombreTipoEmpresa', '$descriptionTipoEmpresa')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: ../../vistas/tipo.php');

}

?>