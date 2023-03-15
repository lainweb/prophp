<?php

include('../../config/db.php');

if(isset($_GET['idTipo'])) {
  $idTipo = $_GET['idTipo'];
  $query = "DELETE FROM tipo WHERE idTipo = $idTipo";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: ../../vistas/tipo.php');
}

?>