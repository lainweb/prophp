
<?php 

include('../../config/db.php');

if (isset($_POST['update'])) {
  $idTipo = $_GET['idTipo'];
  $nombreTipoEmpresa= $_POST['nombreTipoEmpresa'];
  $descripcionTipoEmpresa = $_POST['descripcionTipoEmpresa'];

  $query = "UPDATE tipo set nombreTipoEmpresa = '$nombreTipoEmpresa', descripcionTipoEmpresa = '$descripcionTipoEmpresa' WHERE idTipo=$idTipo";
  mysqli_query($conexion, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: ../../vistas/tipo.php');
}
?>