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
                    <form action="../controlador/empresa/controllerAgregarEmpresa.php" method="POST" enctype="multipart/form-data">

                        <?php $idPersona = $_SESSION['idPersona'];  ?>

                        <div class="form-group">
                            <input type="hidden" name="idPersona" class="form-control" placeholder="idPersona" value="<?php echo $idPersona  ?>" autofocus>
                        </div>
                        <select name="idTipo" class="form-select" aria-label="Default select example">
                            <!-- <option selected>categoria</option> -->
                            <?php
                            $query = "SELECT * FROM tipo";
                            $result_tasks = mysqli_query($conexion, $query);

                            while ($row = mysqli_fetch_assoc($result_tasks)) { ?>

                                <option value="<?php echo $row['idTipo']; ?>"><?php echo $row['nombreTipoEmpresa']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <div class="form-group">
                            <input type="text" name="nombreEmpresa" class="form-control" placeholder="nombreEmpresa" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="sloganEmpresa" class="form-control" placeholder="direccionEmpresa" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="ciudadEmpresa" class="form-control" placeholder="ciudadEmpresa" value="Arica" disabled>
                        </div>

                      

                        <div class="input-group mb-3">
                            <span class="input-group-text">+569</span>
                            <input type="number" name="fonoEmpresa" class="form-control" placeholder="fonoEmpresa" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="horarioEmpresa" class="form-control" placeholder="horarioEmpresa" required>
                        </div>

                        <div class="form-group">
                            <input type="file" name="imagenEmpresa" class="form-control" placeholder="imagenEmpresa" required>
                        </div>

                        <input type="submit" name="agregar" class="btn btn-success btn-block" value="Agregar">
                    </form>
                </div>
            </div>
































            <div class="col-md-8">

            <div class="table-responsive-md">

                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>nombreEmpresa</th>
                            <th>direccionEmpresa</th>
                            <th>fonoEmpresa</th>
                            <th>horarioEmpresa</th>
                            <!--  <th>datosEmpresa</th> -->

                            <th>imagenEmpresa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM empresa";
                        $result_tasks = mysqli_query($conexion, $query);

                        while ($row = mysqli_fetch_assoc($result_tasks)) { ?>

                            <?php
                            $usernameSesion = $_SESSION['idPersona'];

                            if ($usernameSesion == $row['idPersona']) {
                            ?>
                                <tr>

                                    <td><?php echo $row['nombreEmpresa']; ?></td>
                                    <td><?php echo $row['sloganEmpresa']; ?></td>
                                    <td><?php echo $row['fonoEmpresa']; ?></td>
                                    <td><?php echo $row['horarioEmpresa']; ?></td>

                                    <!--  <td ><?php echo $row['imagenEmpresa']; ?></td> -->

                                    <td> <?php echo '<img src="../public/' . $row['imagenEmpresa'] . '" width="100" height="100"/>'; ?></td>





                                    <td>
                                        <a href="editEmpresa.php?idEmpresa=<?php echo $row['idEmpresa'] ?>" class="btn btn-secondary">
                                            <i class="fas fa-marker">editar</i>
                                        </a>

                                        <a href="servicios.php?idEmpresa=<?php echo $row['idEmpresa'] ?>" class="btn btn-secondary">
                                            <i class="fas fa-marker">servicios</i>
                                        </a>
                                        <a href="../controlador/empresa/controllerEliminarEmpresa.php?idEmpresa=<?php echo $row['idEmpresa'] ?>&imagenEmpresa=<?php echo $row['imagenEmpresa'] ?>" class="btn btn-danger">
                                        
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