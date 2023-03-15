
 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="../css/styles.css" type="text/css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<div class="cuerpoLogin">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


  <section id="hero" class="d-flex align-items-center">

    <form style="margin:0 auto" action="../controlador/validacion.php" id="form-session" method="POST">

      <p style="text-align: center;" class="palabra">BienvenidaUsuario</p>
      <div class="input-group form-group">

        <input type="text" class="form-control" name="correoPersona" placeholder="Usuario">
      </div>
      <br>
      <div class="input-group form-group">

        <input type="password" class="form-control" name="contrasenaPersona" placeholder="password">
      </div>
      <br>
      <div class="form-group" style="text-align: center;">
        <input type="submit" value="Login" class="btn btn-secondary">
      </div>
    </form>

  </section>




</div>

</html>