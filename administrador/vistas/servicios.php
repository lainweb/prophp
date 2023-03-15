<?php
session_start();
if (!isset($_SESSION['idPersona'])) {
    header('Location:../login.php');
}
?>
<?php include("../config/db.php"); ?>
<?php require 'cabecera.php' ?>


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
    </style>
</head>

<body>
    <h1>tipo</h1>

    <main class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <!-- MESSAGES -->





                <!-- ADD TASK FORM -->
                <div class="card card-body">
                    <form action="../controlador/servicio/controllerAgregarServicio.php" method="POST">

                        <?php
                        if (isset($_GET['idEmpresa'])) {
                            $idEmpresa = $_GET['idEmpresa'];
                        }
                        ?>
                        <div class="form-group">
                            <input type="hidden" name="idEmpresa" class="form-control" placeholder="idEmpresa" value="<?php echo $idEmpresa; ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nombreServicio" class="form-control" placeholder="nombreServicio" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="descripcionServicio" class="form-control" placeholder="descripcionServicio" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="number" name="valorServicio" class="form-control" placeholder="valorServicio" required>
                        </div>
                        <input type="submit" name="agregar" class="btn btn-success btn-block" value="Agregar">
                    </form>
                </div>
            </div>
            <div class="col-md-8">
            <div class="table-responsive-md">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>nombreServicio</th>
                            <th>descripcionServicio</th>
                            <th>valorServicio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM servicio";
                        $result_tasks = mysqli_query($conexion, $query);

                        while ($row = mysqli_fetch_assoc($result_tasks)) { ?>

                            <?php
                            if (isset($_GET['idEmpresa'])) {
                                $idEmpresa = $_GET['idEmpresa'];
                            }

                            if ($idEmpresa == $row['idEmpresa']) {
                            ?>
                                <tr>
                                    <td><?php echo $row['nombreServicio']; ?></td>
                                    <td><?php echo $row['descripcionServicio']; ?></td>
                                    <td><?php echo $row['valorServicio']; ?></td>

                                    <td>
                                        <a href="editServicio.php?idServicio=<?php echo $row['idServicio'] ?>" class="btn btn-secondary">
                                            <i class="fas fa-marker">editar</i>
                                        </a>

                                        <a href="../controlador/servicio/controllerEliminarServicio.php?idServicio=<?php echo $row['idServicio'] ?>" class="btn btn-danger">
                                            <i class="far fa-trash-alt">Eliminar</i>
                                        </a>
                                    </td>
                                <?php
                            }
                                ?>

                                </tr>
                            <?php } ?>


                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </main>
</body>

</body>

</html>