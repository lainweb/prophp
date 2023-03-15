<?php
include("../config/db.php");
$nombreServicio = '';
$descripcionServicio = '';
$valorServicio = '';

if (isset($_GET['idServicio'])) {
    $idServicio = $_GET['idServicio'];
    $query = "SELECT * FROM servicio WHERE idServicio=$idServicio";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombreServicio = $row['nombreServicio'];
        $descripcionServicio = $row['descripcionServicio'];
        $valorServicio = $row['valorServicio'];
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
                <h2>Realiza cambios a tus servicios</h2>
                    <p>puedes editar  aqui rus servicios o productos.</p>
                   
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <form style="text-align:center ;" action="../controlador/servicio/controllerEditarServicio.php?idServicio=<?php echo $row['idServicio'] ?>" method="POST">



                        <div class="form-group">
                            <input name="nombreServicio" type="text" class="form-control" value="<?php echo $nombreServicio; ?>" placeholder="nombreServicio">
                        </div>
                        <div class="form-group">
                            <input name="descripcionServicio" type="text" class="form-control" value="<?php echo $descripcionServicio; ?>" placeholder="descripcionServicio">
                        </div>
                        <div class="form-group">
                            <input name="valorServicio" type="text" class="form-control" value="<?php echo $valorServicio; ?>" placeholder="valorServicio">
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