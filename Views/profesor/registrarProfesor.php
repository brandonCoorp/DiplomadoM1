
   <?php require 'Views/app/header.php' ?>

<div id="main" class="main">
    <div class="card-login">
      <h1 class="center">Crear Cuenta Profesor</h1><br>
      <div class="center"><?php echo $this->mensaje ?></div>
      <form action="<?php echo constant('URL'); ?>Profesor/RegistrarProfesor" method="post">
      <div class="row">
      <div class="mb-3">
         <select class="form-select" name="grado" aria-label="Default select example">
            <option selected valu ="0">Select Grado</option>
            <?php foreach ($this->grados as $key => $grado) {
             # code...
            ?>
            <option value="<?php echo $grado['id']?>"><?php echo $grado['nombre']?></option>
            <?php }?>
         </select>
        </div>
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

        <div class="mb-3">
          <label for="telefono" class="form-label">Telefono :</label>
          <input type="text" class="form-control" name="telefono" id="telefono" required aria-describedby="telefonoHelp">
          <div id="telefonoHelp" class="form-text"></div>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Cuenta</button>
       

        </div>
        <div class="col">

       

        <div class="mb-3">
          <label for="fecha_ingreso" class="form-label">Año de Ingreso al Colegio :</label>
          <input type="text" class="form-control" name="fecha_ingreso" id="fecha_ingreso" required aria-describedby="fecha_ingresoHelp">
          <div id="fecha_ingresoHelp" class="form-text"></div>
        </div>
        
        <div class="mb-3">
          <label for="cod_profesor" class="form-label">Codigo / Nombre de Cuenta :</label>
          <input type="text" class="form-control" name="cod_profesor" id="cod_profesor" required aria-describedby="cod_profesorHelp">
          <div id="cod_profesorHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="exampleInputcontraseña1" class="form-label">Contraseña</label>
          <input type="password" name="password_p" class="form-control" id="exampleInputcontraseña1">
        </div>

        <div class="mb-3">
          <label for="sueldo" class="form-label">Sueldo :</label>
          <input type="number" class="form-control" name="sueldo" id="sueldo" min="0" required aria-describedby="sueldoHelp">
          <div id="sueldoHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="profesion" class="form-label">Profesion :</label>
          <input type="text" class="form-control" name="profesion" id="profesion" required aria-describedby="profesionHelp">
          <div id="profesionHelp" class="form-text"></div>
        </div>

        
        
      
</div>
</div>
      </form>

    </div>

  </div>
 
  <?php require 'Views/app/footer.php' ?>