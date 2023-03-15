<?php

include('../../config/db.php');

if (isset($_POST['agregar'])) {
  $idPersona = $_POST['idPersona'];
  $idTipo = $_POST['idTipo'];
  $nombreEmpresa = $_POST['nombreEmpresa'];
  $sloganEmpresa = $_POST['sloganEmpresa'];
  $ciudadEmpresa = $_POST['ciudadEmpresa'];
  $fonoEmpresa = $_POST['fonoEmpresa'];
  $horarioEmpresa = $_POST['horarioEmpresa'];
  //$imagenEmpresa = $_POST['imagenEmpresa'];
 
 
$target_dir = "../../public/";



$target_file = $target_dir . basename($_FILES["imagenEmpresa"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["agregar"])) {
  $check = getimagesize($_FILES["imagenEmpresa"]["tmp_name"]);
  if($check !== false) {
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
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}
 else {
 
  $extension = end(explode('.', $_FILES["imagenEmpresa"]["name"]));
  $time = time();
  
  $nombrefichero=$idPersona . $time;

 
  //if (move_uploaded_file($_FILES[ "imagenEmpresa"]["tmp_name"], $target_file )) {
     move_uploaded_file($_FILES["imagenEmpresa"]["tmp_name"], $target_dir . $nombrefichero .'.' . $imageFileType);



      $imagenEmpresa = $nombrefichero .'.' . $imageFileType;
      //$string1 = strval($idPersona);
      //$string2 = strval($imagenEmpresa);
     // $nuevoString=$string1 . $string2;
      
      $query = "INSERT INTO empresa(idPersona,idTipo,nombreEmpresa,sloganEmpresa,ciudadEmpresa,fonoEmpresa,horarioEmpresa,imagenEmpresa) 
      VALUES ('$idPersona', '$idTipo', '$nombreEmpresa', '$sloganEmpresa', '$ciudadEmpresa', '$fonoEmpresa', '$horarioEmpresa', '$imagenEmpresa')";
      $result = mysqli_query($conexion, $query);
      if (!$result) {
        die("Query Failed.");
      }
    
      $_SESSION['message'] = 'Task Saved Successfully';
      $_SESSION['message_type'] = 'success';
      header('Location: ../../vistas/empresas.php');



   
   
}








 
}
