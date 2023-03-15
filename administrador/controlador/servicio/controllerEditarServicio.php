
<?php 

include('../../config/db.php');

if (isset($_POST['update'])) {
  $idServicio = $_GET['idServicio'];
  $nombreServicio= $_POST['nombreServicio'];
  $descripcionServicio = $_POST['descripcionServicio'];
  $valorServicio = $_POST['valorServicio'];

  $query = "UPDATE servicio set nombreServicio = '$nombreServicio', descripcionServicio = '$descripcionServicio', valorServicio = '$valorServicio' WHERE idServicio=$idServicio";
  mysqli_query($conexion, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: ../../vistas/empresas.php');
}
?>