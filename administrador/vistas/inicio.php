<?php
session_start();
if (!isset($_SESSION['idPersona'])) {
  header('Location:./login.php');
}
?>



<?php include("../config/db.php"); ?>

<?php include("cabecera.php"); ?>

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

<main class="container p-4">


<br>
<br>
<br>
<br>
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->


      <?php if (isset($_SESSION['correo'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php session_unset();
      } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="./controlador/inicio/controllerAgregarPersona.php" method="POST">
          <div class="form-group">
            <input type="hidden" name="idTipop" class="form-control" placeholder="idTipop" value="1" required>
          </div>
          <div class="form-group">
            <input type="hidden" name="idEstado" class="form-control" placeholder="idEstado" value="1" required>
          </div>
          <div class="form-group">
            <input type="text" name="rutPersona" class="form-control" placeholder="rutPersona" required>
          </div>
          <div class="form-group">
            <input type="text" name="nombresPersona" class="form-control" placeholder="nombrePersona" required>
          </div>
          <div class="form-group">
            <input type="text" name="apellidoPersona" class="form-control" placeholder="apellidoPersona" required>
          </div>
          <div class="form-group">
            <input type="text" name="correoPersona" class="form-control" placeholder="correoPersona" required>
          </div>
          <div class="form-group">
            <input type="text" name="contrasenaPersona" class="form-control" placeholder="contrasenaPersona" required>
          </div>
          <input type="submit" name="agregar" class="btn btn-success btn-block" value="agregarAdministrador">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>idPersona</th>
            <th>rutPersona</th>
            <th>nombresPersona</th>
            <th>apellidoPersona</th>
            <th>correoPersona</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM persona";
          $result_tasks = mysqli_query($conexion, $query);

          while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
            <tr>
              <td><?php echo $row['idPersona']; ?></td>
              <td><?php echo $row['rutPersona']; ?></td>
              <td><?php echo $row['nombresPersona']; ?></td>
              <td><?php echo $row['apellidoPersona']; ?></td>
              <td><?php echo $row['correoPersona']; ?></td>


            </tr>
          <?php } ?>


        </tbody>
      </table>
    </div>
  </div>
</main>


</body>

</html>