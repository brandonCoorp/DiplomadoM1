<!DOCTYPE html>
<html lang="es">

<head>
  <title>Colegio</title>
  <meta charset="UTF-8">
  <meta name="title" content="Título de la WEB">
  <meta name="description" content="Descripción de la WEB">
  <!-- estilos css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="<?php echo constant('URL'); ?>public/css/app.css" rel="stylesheet" type="text/css" />
  <!-- documentos js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
  <script src="<?php echo constant('URL'); ?>public/js/app.js"></script>

</head>

<body>
  <div id="main" class="main">
    <div class="card-login">
      <h1 class="center">Iniciar Sesion Director</h1>
      <div class="center"><?php echo $this->mensaje ?></div>
      <form action="<?php echo constant('URL'); ?>Director/login" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
          <input type="email" class="form-control" name="correo" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Nunca compartimos sus datos con nadie mas.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputcontraseña1" class="form-label">Contraseña</label>
          <input type="password" name="contraseña" class="form-control" id="exampleInputcontraseña1">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <div style="float:right;">
          <a class="btn btn-primary" href="<?php echo constant('URL'); ?>Director/MostrarRegistrar"
            role="button">Registrar</a>
          <a class="btn btn-primary" href="<?php echo constant('URL'); ?>" role="button">volver</a>
        </div>
      </form>

    </div>

  </div>




</body>

</html>