
   <?php require 'Views/app/header.php' ?>

<div id="main" class="main">
    <div class="card-login">
      <h1 class="center">Editar Cuenta Profesor</h1><br>
      <div class="center"><?php echo $this->mensaje ?></div>
      <form action="<?php echo constant('URL'); ?>Profesor/EditarProfesor" method="post">
      <div class="row">
      <div class="mb-3">
         <select class="form-select" name="grado" aria-label="Default select example">
            <?php foreach ($this->grados as $key => $grado) {
             if($this->profesor['grado_id'] == $grado['id']){ ?>
                <option selected value="<?php echo $grado['id']?>"><?php echo $grado['nombre']?></option>
                <?php    }else{  ?>
            <option value="<?php echo $grado['id']?>"><?php echo $grado['nombre']?></option>
            <?php } } ?>
         </select>
        </div>
          <div class="col">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre :</label>
          <input type="text" class="form-control" value="<?php echo $this->persona['nombre']?>" name="nombre" id="nombre" required aria-describedby="nombreHelp">
          <div id="nombreHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="apellido_paterno" class="form-label">Apellido Paterno :</label>
          <input type="text" class="form-control" value="<?php echo $this->persona['apellido_paterno']?>" name="apellido_paterno" id="apellido_paterno" required aria-describedby="apellido_paternoHelp">
          <div id="apellido_paternoHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="apellido_materno" class="form-label">Apellido Materno :</label>
          <input type="text" class="form-control" value="<?php echo $this->persona['apellido_materno']?>" name="apellido_materno" id="apellido_materno" required aria-describedby="apellido_maternoHelp">
          <div id="apellido_maternoHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="direccion" class="form-label">Direccion :</label>
          <input type="text" class="form-control" value="<?php echo $this->persona['direccion']?>" name="direccion" id="direccion" required aria-describedby="direccionHelp">
          <div id="direccionHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="telefono" class="form-label">Telefono :</label>
          <input type="text" class="form-control" value="<?php echo $this->persona['telefono']?>" name="telefono" id="telefono" required aria-describedby="telefonoHelp">
          <input type="text" hidden="none" class="form-control" value="<?php echo $this->persona['id']?>" name="persona_id" id="persona_id" required aria-describedby="persona_idHelp">
      
          <div id="telefonoHelp" class="form-text"></div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
       

        </div>
        <div class="col">

       

        <div class="mb-3">
          <label for="fecha_ingreso" class="form-label">Año de Ingreso al Colegio :</label>
          <input type="text" class="form-control" value="<?php echo $this->profesor['fecha_ingreso']?>" name="fecha_ingreso" id="fecha_ingreso" required aria-describedby="fecha_ingresoHelp">
          <input type="text" hidden="none" class="form-control" value="<?php echo $this->profesor['id']?>" name="profesor_id" id="profesor_id" required aria-describedby="profesor_idHelp">
     
          <div id="fecha_ingresoHelp" class="form-text"></div>
        </div>
        
        <div class="mb-3">
          <label for="cod_profesor" class="form-label">Codigo / Nombre de Cuenta :</label>
          <input type="text" class="form-control" value="<?php echo $this->profesor['cod_profesor']?>" name="cod_profesor" id="cod_profesor" required aria-describedby="cod_profesorHelp">
          <div id="cod_profesorHelp" class="form-text"></div>
        </div>

        
        <div class="mb-3">
          <label for="sueldo" class="form-label">Sueldo :</label>
          <input type="number" class="form-control" value="<?php echo $this->profesor['sueldo']?>" name="sueldo" id="sueldo" min="0" required aria-describedby="sueldoHelp">
          <div id="sueldoHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="profesion" class="form-label">Profesion :</label>
          <input type="text" class="form-control" value="<?php echo $this->profesor['profesion']?>" name="profesion" id="profesion" required aria-describedby="profesionHelp">
          <div id="profesionHelp" class="form-text"></div>
        </div>

        
        
      
</div>
</div>
      </form>

    </div>

  </div>
 
  <?php require 'Views/app/footer.php' ?>