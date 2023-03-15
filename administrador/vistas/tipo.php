
<?php
  session_start();
  if (!isset($_SESSION['idPersona'])) {
    header('Location:../login.php');
  }
?>
<?php include("../config/db.php"); ?>
<?php require 'cabecera.php' ?>




<body>
<h1>tipo</h1>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

    
      


      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="../controlador/tipo/controllerAgregarTipo.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombreTipoEmpresa" class="form-control" placeholder="nombreTipo" required>
          </div>
          <div class="form-group">
            <input type="text" name="descripcionTipoEmpresa" class="form-control" placeholder="descripcionTipoEmpresa" required>
          </div>
          <input type="submit" name="agregar" class="btn btn-success btn-block" value="Agregar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>idTipo</th>
            <th>nombreTipoEmpresa</th>
            <th>descripcionTipoEmpresa</th>
           
          </tr>
        </thead>
        <tbody>
        <?php
          $query = "SELECT * FROM tipo";
          $result_tasks = mysqli_query($conexion, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['idTipo']; ?></td>
            <td><?php echo $row['nombreTipoEmpresa']; ?></td>
            <td><?php echo $row['descripcionTipoEmpresa']; ?></td>
            <td>
            <a href="editTipo.php?idTipo=<?php echo $row['idTipo']?>" class="btn btn-secondary">
                <i class="fas fa-marker">editar</i>
              </a>
          
              <a href="../controlador/tipo/controllerEliminarTipo.php?idTipo=<?php echo $row['idTipo']?>" class="btn btn-danger">
                <i class="far fa-trash-alt">Eliminar</i>
              </a>
            </td>
            
           
          </tr>
          <?php } ?>
       

        </tbody>
      </table>
    </div>
  </div>
</main>
</body>

</body>

</html>