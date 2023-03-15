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

    <section id="hero" class="d-flex align-items-center">
   
        <form style="margin:0 auto" method="POST" style="margin:0 auto" action="../controlador/validacionUsuario.php">




            <input type="hidden" class="form-control" placeholder="idTipop" name="idTipop" value="2" required>
            <br>

            <input type="hidden" class="form-control" placeholder="idEstado" name="idEstado" value="1">
            <br>
            <!--  <input type="text" class="form-control" placeholder="rutPersona" name="rutPersona" required autofocus> -->


            <br>
            <input type="text" class="form-control" placeholder="nombresPersona" name="nombresPersona" required>
            <br>

            <input type="text" class="form-control" placeholder="apellidoPersona" name="apellidoPersona" required>

            <br>
            <input type="email" class="form-control" placeholder="correoPersona" name="correoPersona" required>
            <br>
            <input minlength="11" type="password" class="form-control" placeholder="contrasenaPersona" name="contrasenaPersona" minlength="11" required>


            <input type="submit" name="agregar" class="btn btn-secondary" value="Registrarce">
            <input type="submit" name="agregar" class="btn btn-secondary" value="cancelar">
        </form>

    </section>
</div>

</html>