
<?php require 'Views/app/header.php' ?>
<div class="card text-center mx-auto" style="width: 50vw;">

  <div class="card-body mx-auto ">
    <h5 class="card-title">Registrar Grado</h5>
<form action="<?php echo constant('URL'); ?>Grado/RegistarGrado" method="POST">
<div class="mb-3">
    <label for="codigo" class="form-label">Codigo</label>
    <input type="text" class="form-control" name="codigo" id="codigo" aria-describedby="codigoHelp" required>
    <div id="codigoHelp" class="form-text">Ingresa el codigo del nuevo Grado.</div>
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="nombreHelp" required>
    <div id="nombreHelp" class="form-text">Ingresa el Nombre del nuevo Grado.</div>
  </div>
  <div class="mb-3">
  <label for="descripcion" class="form-label">Descripción</label>
  <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
</div>
 
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>

  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
<?php require 'Views/app/footer.php' ?>