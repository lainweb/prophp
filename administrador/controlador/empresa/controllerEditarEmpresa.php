
<?php

include('../../config/db.php');

if (isset($_POST['update'])) {
 
  $idEmpresa = $_GET['idEmpresa'];
  $idPersona = $_POST['idPersona'];
  $nombreEmpresa = $_POST['nombreEmpresa'];
  $sloganEmpresa = $_POST['sloganEmpresa'];
  $fonoEmpresa = $_POST['fonoEmpresa'];
  $horarioEmpresa = $_POST['horarioEmpresa'];



  $imagenRespaldo = $_POST['imagenEmpresa'];
  $imagenEmpresa = $_FILES["imagenEmpresa"]["name"];
  $imagenFinal ='';

  if ($imagenEmpresa) {//si hay algo en la imagen  si no esta nulo manter imagenguaradada originalmente


    $target_dir = "../../public/";
    $target_file = $target_dir . basename($_FILES["imagenEmpresa"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["update"])) {
      $check = getimagesize($_FILES["imagenEmpresa"]["tmp_name"]);
      if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["imagenEmpresa"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if (
      $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif"
    ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } 
    $extension = end(explode('.', $_FILES["imagenEmpresa"]["name"]));
    $time = time();
    
    $nombrefichero=$idPersona . $time;
    $imagenFinal = $nombrefichero .'.' . $imageFileType;
    unlink($imagenRespaldo);
    unlink( $target_dir . $imagenRespaldo);
    move_uploaded_file($_FILES["imagenEmpresa"]["tmp_name"], $target_dir . $nombrefichero .'.' . $imageFileType);

    $query = "UPDATE empresa set nombreEmpresa = '$nombreEmpresa', sloganEmpresa = '$sloganEmpresa', fonoEmpresa = '$fonoEmpresa', horarioEmpresa = '$horarioEmpresa', imagenEmpresa = '$imagenFinal' WHERE idEmpresa=$idEmpresa";
    mysqli_query($conexion, $query);
    $_SESSION['message'] = 'Task Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header('Location: ../../vistas/empresas.php');
  } else {


    $query = "UPDATE empresa set nombreEmpresa = '$nombreEmpresa', sloganEmpresa = '$sloganEmpresa', fonoEmpresa = '$fonoEmpresa', horarioEmpresa = '$horarioEmpresa', imagenEmpresa = '$imagenRespaldo' WHERE idEmpresa=$idEmpresa";
    mysqli_query($conexion, $query);
    $_SESSION['message'] = 'Task Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header('Location: ../../vistas/empresas.php');
  }
}
?>