
<?php require 'Views/app/header.php' ?>
<div class="card text-center mx-auto" style="width: 50vw;">

  <div class="card-body mx-auto ">
    <h5 class="card-title">Registrar Descuento</h5>
<form action="<?php echo constant('URL'); ?>Descuento/registarDescuento" method="POST">

  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="nombreHelp" required>
    <div id="nombreHelp" class="form-text">Ingresa el Nombre del nuevo Descuento.</div>
  </div>
  <div class="mb-3">
  <label for="descripcion" class="form-label">Descripción</label>
  <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
</div>

    <div class="mb-3">
          <label for="monto" class="form-label">Monto a Descontar :</label>
          <input type="number" class="form-control" name="monto" id="monto" min="0" required aria-describedby="montoHelp">
          <div id="montoHelp" class="form-text"></div>
    </div>

    <div class="mb-3">
        <label for="nota_min" class="form-label">Nota Minima Requerida :</label>
        <input type="number" class="form-control" name="nota_min" id="nota_min" min="0" required aria-describedby="nota_minHelp">
        <div id="nota_minHelp" class="form-text"></div>
    </div>

 
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>

  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
<?php require 'Views/app/footer.php' ?>