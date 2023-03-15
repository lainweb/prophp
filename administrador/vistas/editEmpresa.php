
<?php

session_start();



if (!isset($_SESSION['idPersona'])) {
  header('Location:./login.php');
}
?>
<?php
include("../config/db.php");
$idPersona = '';
$nombreEmpresa = '';
$sloganEmpresa = '';
$fonoEmpresa = '';
$horarioEmpresa = '';
$imagenEmpresa = '';

if (isset($_GET['idEmpresa'])) {
    $idEmpresa = $_GET['idEmpresa'];
    $query = "SELECT * FROM empresa WHERE idEmpresa=$idEmpresa";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $idPersona = $row['idPersona'];
        $nombreEmpresa = $row['nombreEmpresa'];
        $sloganEmpresa = $row['sloganEmpresa'];
        $fonoEmpresa = $row['fonoEmpresa'];
        $horarioEmpresa = $row['horarioEmpresa'];
        $imagenEmpresa = $row['imagenEmpresa'];
    }
}

?>

<head>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        .fondo {
            background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);
            height: 100%;
        }
    </style>

    <link rel="stylesheet" href="../css/styles.css" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<div class="fondo">

    <br>
    <br>
    <br>
    <br>



    <div class="container">


        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Realiza cambio a tu Empresa</h2>
                    <p>puedes editar la mayoria de las caracteristas de tu empresa.</p>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <form style="margin:0 auto" action="../controlador/empresa/controllerEditarEmpresa.php?idEmpresa=<?php echo $row['idEmpresa'] ?>" method="POST" enctype="multipart/form-data">


                        <div class="form-group">
                            <input name="idPersona" type="hidden" class="form-control" value="<?php echo $idPersona; ?>" placeholder="idPersona">
                        </div>

                        <div class="form-group">
                            <input name="nombreEmpresa" type="text" class="form-control" value="<?php echo $nombreEmpresa; ?>" placeholder="nombreEmpresa" required>
                        </div>
                        <div class="form-group">
                            <input name="sloganEmpresa" type="text" class="form-control" value="<?php echo $sloganEmpresa; ?>" placeholder="direccionEmpresa" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">+569</span>
                            <input name="fonoEmpresa" type="text" class="form-control" value="<?php echo $fonoEmpresa; ?>" placeholder="fonoEmpresa" required>
                        </div>
                        <div class="form-group">
                            <input name="horarioEmpresa" type="text" class="form-control" value="<?php echo $horarioEmpresa; ?>" placeholder="horarioEmpresa" required>
                        </div>

                        <div class="form-group">
                            <input name="imagenEmpresa" type="hidden" class="form-control" value="<?php echo $imagenEmpresa; ?>" placeholder="imagenEmpresa">
                        </div>

                        <div class="form-group">
                            <input name="imagenEmpresa" type="file" class="form-control" value="<?php echo $imagenEmpresa; ?>" placeholder="imagenEmpresa">
                        </div>
                        <button class="btn btn-secondary" name="update">
                            Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>