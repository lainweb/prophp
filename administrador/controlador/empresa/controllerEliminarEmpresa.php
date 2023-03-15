<?php

include('../../config/db.php');

if(isset($_GET['idEmpresa'])) {

  
  $variable2=($_GET['imagenEmpresa']);
  $target_dir = "../../public/";

  unlink( $target_dir . $variable2);





  $idEmpresa = $_GET['idEmpresa'];
  $query = "DELETE FROM empresa WHERE idEmpresa = $idEmpresa";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: ../../vistas/empresas.php');
}

?>