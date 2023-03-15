<?php

session_start();



if (!isset($_SESSION['idPersona'])) {
  header('Location:./login.php');
}
?>
<?php $idTipop = $_SESSION['idTipop']; ?>




<?php include("../config/db.php"); ?>

<?php include("cabecera.php"); ?>


<?php if ($idTipop == 1) { ?>

  <main>
  <br>
<br>
<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Bienvenido Administrador</h1>
      <p class="lead text-muted">pronto se agregara mas funcionalidades y color al panel del administrador.</p>
      <p>
        <a href="./empresas.php" class="btn btn-primary my-2">Crear Empresa</a>
     
      </p>
    </div>
  </div>
</section>

<div class="album py-5 bg-light">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
        <img src="../public/usuario1.jpg" class="img-fluid animated" alt="" style="height: 200px; ;" >

          <div class="card-body">
            <p class="card-text">simple y practico.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
             
              </div>
            
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
        <img src="../public/usuario2.jpg" class="img-fluid animated" alt="" style="height: 200px; ;" >

          <div class="card-body">
            <p class="card-text">creativo y expansible.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
             
              </div>
           
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
        <img src="../public/usuario3.jpg" class="img-fluid animated" alt="" style="height: 200px; ;" >
          <div class="card-body">
            <p class="card-text">seguro y amigable.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
             
              </div>
             
            </div>
          </div>
        </div>
      </div>

   
    

     
    
    </div>
  </div>
</div>

</main>

  

<?php } else {   ?>


  <main>
  <br>
<br>
<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Bienvenido Usuario</h1>
      <p class="lead text-muted">El sistema Main esta a tu dipocicion para poder utilizarlos, podras notar que te ofrece herramientas
        utiles para poder empezar a crear y administrar tu empresa.</p>
      <p>
      <a href="./empresas.php" class="btn btn-primary my-2">Crear Empresa</a>
     
      </p>
    </div>
  </div>
</section>

<div class="album py-5 bg-light">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
        <img src="../public/usuario1.jpg" class="img-fluid animated" alt="" style="height: 200px; ;" >

          <div class="card-body">
            <p class="card-text">simple y practico.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
             
              </div>
            
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
        <img src="../public/usuario2.jpg" class="img-fluid animated" alt="" style="height: 200px; ;" >

          <div class="card-body">
            <p class="card-text">creativo y expansible.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
             
              </div>
           
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
        <img src="../public/usuario3.jpg" class="img-fluid animated" alt="" style="height: 200px; ;" >

          <div class="card-body">
            <p class="card-text">seguro y amigable.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
             
              </div>
             
            </div>
          </div>
        </div>
      </div>

   
    

     
    
    </div>
  </div>
</div>

</main>


<?php }  ?>