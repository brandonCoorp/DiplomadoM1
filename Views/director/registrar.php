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
      <h1 class="center">Bienvenido al Registro de Director</h1>
      <div class="center"><?php echo $this->mensaje ?></div>
      <form action="<?php echo constant('URL'); ?>Director/RegistrarDirector" method="post">
      <div class="row">
          <div class="col">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre :</label>
          <input type="text" class="form-control" name="nombre" id="nombre" required aria-describedby="nombreHelp">
          <div id="nombreHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="apellido_paterno" class="form-label">Apellido Paterno :</label>
          <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" required aria-describedby="apellido_paternoHelp">
          <div id="apellido_paternoHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="apellido_materno" class="form-label">Apellido Materno :</label>
          <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" required aria-describedby="apellido_maternoHelp">
          <div id="apellido_maternoHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="direccion" class="form-label">Direccion :</label>
          <input type="text" class="form-control" name="direccion" id="direccion" required aria-describedby="direccionHelp">
          <div id="direccionHelp" class="form-text"></div>
        </div>
        <button type="submit" class="btn btn-primary">Registrar Cuenta</button>
       

        </div>
        <div class="col">

        <div class="mb-3">
          <label for="telefono" class="form-label">Telefono :</label>
          <input type="text" class="form-control" name="telefono" id="telefono" required aria-describedby="telefonoHelp">
          <div id="telefonoHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="fecha_ingreso" class="form-label">Año de Ingreso al Colegio :</label>
          <input type="text" class="form-control" name="fecha_ingreso" id="fecha_ingreso" required aria-describedby="fecha_ingresoHelp">
          <div id="fecha_ingresoHelp" class="form-text"></div>
        </div>
        
        <div class="mb-3">
          <label for="cod_director" class="form-label">Codigo / Nombre de Cuenta :</label>
          <input type="text" class="form-control" name="cod_director" id="cod_director" required aria-describedby="cod_directorHelp">
          <div id="cod_directorHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="exampleInputcontraseña1" class="form-label">Contraseña</label>
          <input type="password" name="password_d" class="form-control" id="exampleInputcontraseña1">
        </div>

        
        
        <div style="float:right;">
          <a class="btn btn-primary" href="<?php echo constant('URL'); ?>" role="button">Login</a>
        </div>
</div>
</div>
      </form>

    </div>

  </div>
 

</body>

</html>