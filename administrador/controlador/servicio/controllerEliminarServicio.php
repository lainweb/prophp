<?php

include('../../config/db.php');

if(isset($_GET['idServicio'])) {
  $idServicio = $_GET['idServicio'];
  $query = "DELETE FROM servicio WHERE idServicio = $idServicio";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: ../../vistas/empresas.php');
}

?>