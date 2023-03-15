<?php
include("../config/db.php");
$nombreTipoEmpresa = '';
$descripcionTipoEmpresa = '';

if (isset($_GET['idTipo'])) {
    $idTipo = $_GET['idTipo'];
    $query = "SELECT * FROM tipo WHERE idTipo=$idTipo";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombreTipoEmpresa = $row['nombreTipoEmpresa'];
        $descripcionTipoEmpresa = $row['descripcionTipoEmpresa'];
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

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="../controlador/tipo/controllerEditarTipo.php?idTipo=<?php echo $row['idTipo'] ?>" method="POST">



                        <div class="form-group">
                            <input name="nombreTipoEmpresa" type="text" class="form-control" value="<?php echo $nombreTipoEmpresa; ?>" placeholder="nombreTipoEmpresa" required>
                        </div>
                        <div class="form-group">
                            <input name="descripcionTipoEmpresa" type="text" class="form-control" value="<?php echo $descripcionTipoEmpresa; ?>" placeholder="descripcionTipoEmpresa" required>
                        </div>
                        <button class="btn-success" name="update">
                            Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>