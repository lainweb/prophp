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



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- <title>Ninestars Bootstrap Template - Index</title> -->

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Ninestars - v4.9.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <br>
   <br>

    <main id="main" style="text-align:center ;">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                        <?php echo '<img src="../public/' . $row['imagenEmpresa'] . '" width="300" height="300" class="img-fluid" alt="" data-aos="zoom-in"/>'; ?>

                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <h3 data-aos="fade-up"><?php echo $nombreEmpresa; ?></h3>
                        <p data-aos="fade-up" data-aos-delay="100">
                            fono <?php echo $fonoEmpresa; ?>
                            direccion <?php echo $sloganEmpresa; ?>
                            Horario <?php echo $horarioEmpresa; ?>
                        </p>
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4><?php echo $nombreEmpresa; ?></h4>
                                <p>La empresa se encuentra disponible para sus clientes</p>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Disponible </h4>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section  class="section" id="process" >
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Servicios</h2>
                    <p>Mira lo que ofrecemos</p>
                </div>
              


                <div class="row justify-content-center">

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


                            <div class="col-lg-4 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <h4 class="title"><a href=""><?php echo $row['nombreServicio']; ?></a></h4>
                                    <p class="description"><?php echo $row['descripcionServicio']; ?></p>
                                    <p class="description">$<?php echo $row['valorServicio']; ?></p>
                                </div>
                            </div>


                        <?php
                        }
                        ?>

                        </tr>




                    <?php } ?>


                </div>

            </div>
        </section><!-- End Services Section -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="../assets/vendor/aos/aos.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="../assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="../assets/js/main.js"></script>

    </main>
</body>

</html>