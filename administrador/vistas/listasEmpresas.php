<?php include("../config/db.php"); ?>

<head>
    <meta charset="UTF-8">
    <title>Prueba de PHP</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <link href="/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="css/styles.css" type="text/css">



    <link rel="stylesheet" href="css/styles.css" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color: #A61FF9;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Maki</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./registrarce.php">Registrarce</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
</header>


<body>

    <br>
    <br>
    <br>
    <br>
    <main id="main" style="text-align:center ;">

        <!-- ======= About Section ======= -->


        <!-- ======= Services Section ======= -->
        <section class="section" id="process">
            <div class="container" data-aos="fade-up">


                <form action="listasEmpresas.php" method="post">
                    <input class="btn btn-secondary" type="submit" name="enviar" value="VerTodos" id="btnEnviar"><br>

                </form>



                <br>
                <form action="listasEmpresas.php" class="php-email-form">
                    <select name="idTipo" class="form-select" aria-label="Default select example" onchange="this.form.submit()">
                        <!-- <option selected>categoria</option> -->
                        <option selected>categoria</option>
                        <?php
                        $query = "SELECT * FROM tipo";
                        $result_tasks = mysqli_query($conexion, $query);

                        while ($row = mysqli_fetch_assoc($result_tasks)) { ?>

                            <option value="<?php echo $row['idTipo']; ?>"><?php echo $row['nombreTipoEmpresa']; ?></option>
                            <?php $valor = $_POST['idTipo']; ?>
                        <?php
                        }
                        ?>

                    </select>

                </form>


                <div class="section-title">

                    <h1 class="palabra">Empresas</h1>
                </div>







                <?php
                $valor = '';
                if (isset($_GET['idTipo'])) {
                    $idTipo = $_GET['idTipo'];
                    if ($idTipo != 'null') {
                        $valor = $idTipo;
                    }

                ?>

                    <div class="row justify-content-center">
                        <?php
                        $query = "SELECT * FROM empresa  WHERE idTipo=$valor";
                        $result_tasks = mysqli_query($conexion, $query);

                        while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                            <tr>
                                <div class="col-lg-4 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                    <br>
                                    <div class="icon-box">
                                        <div class="icon"><?php echo '<img class="rounded-circle" src="../public/' . $row['imagenEmpresa'] . '" width="200" height="200"/>'; ?></div>
                                        <h4 class="title"><a href=""><?php echo $row['nombreEmpresa']; ?></a></h4>

                                        <td>
                                            <a href="verEmpresa.php?idEmpresa=<?php echo $row['idEmpresa'] ?>" class="btn btn-secondary">
                                                <i class="fas fa-marker">Ver</i>
                                            </a>
                                        </td>
                                    </div>
                                </div>
                            </tr>
                        <?php } ?>
                    </div>




                <?php } else { ?>


                    <div class="row justify-content-center">


                        <?php

                        $query = "SELECT * FROM empresa";
                        $result_tasks = mysqli_query($conexion, $query);

                        while ($row = mysqli_fetch_assoc($result_tasks)) { ?>



                            <tr>


                                <div class="col-lg-4 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                    <br>
                                    <div class="icon-box">
                                        <div class="icon"><?php echo '<img class="rounded-circle" src="../public/' . $row['imagenEmpresa'] . '" width="200" height="200"/>'; ?></div>
                                        <h3 class="palabra"><?php echo $row['nombreEmpresa']; ?></h3>

                                        <td>
                                            <a href="verEmpresa.php?idEmpresa=<?php echo $row['idEmpresa'] ?>" class="btn btn-secondary">
                                                <i class="fas fa-marker">Ver</i>
                                            </a>



                                        </td>
                                    </div>
                                </div>

                            </tr>



                        <?php } ?>
                    </div>

                <?php } ?>

            </div>
        </section><!-- End Services Section -->


    </main>









</body>