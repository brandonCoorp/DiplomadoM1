
   <?php require 'Views/app/header.php' ?>

<div id="main" class="main">
    <div class="card-login">
      <h1 class="center">Inscribir Alumno</h1><br>
      <div class="center"><?php echo $this->mensaje ?></div>
      <form action="<?php echo constant('URL'); ?>Inscripcion/guardarInscripcion" method="post">
      <div class="row">
     
          <div class="col">
        <div class="mb-3">
          <label for="grado" class="form-label">Grado :</label>
          <input type="text" class="form-control" name="grado_id" id="grado"  value="<?php echo $this->grado['nombre']?>" required aria-describedby="gradoHelp" disabled="disabled">
          <div id="gradoHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre Alumno :</label>
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

      
       
        </div>
        <div class="col">
        <div class="mb-3">
          <label for="gestion" class="form-label">Gestion :</label>
          <input type="text" class="form-control" name="gestion" id="gestion"  value="2022" required aria-describedby="gestionHelp" disabled="readonly">
          <div id="gestionHelp" class="form-text"></div>
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

        <div class="mb-3">
         <select class="form-select" name="descuento_id" aria-label="Default select example">
            <option selected valu ="0">Select Descuento</option>
            <?php foreach ($this->descuentos as $key => $descuento) {
             # code...
            ?>
            <option value="<?php echo $descuento['id']?>"><?php echo $descuento['nombre'].'-'.$descuento['monto'].'%-'.$descuento['nota_min'].'pts.'?></option>
            <?php }?>
         </select>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="estado" id="estado1">
                <label class="form-check-label" for="estado1">
                   Antiguo
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="estado" id="estado2" checked>
                <label class="form-check-label" for="estado2">
                   Nuevo
                </label>
            </div>
        </div>
      
</div>
</div>
<button type="submit" class="btn btn-primary">Registrar Alumno</button>
      </form>

    </div>

  </div>
 
  <?php require 'Views/app/footer.php' ?>