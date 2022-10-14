
    <?php require 'Views/app/header.php' ?>

<div id="main_list" class="main-list">
<h1 class="center">Esta es la vista de Descuentos</h1>

<?php if($this->mensaje!="")
echo $this->mensaje;
?>
<a href="<?php echo constant('URL'); ?>Descuento/verRegistarDescuento" class="btn btn-primary right" role="button">Nuevo</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Monto</th>
      <th scope="col">Nota Minima</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
       foreach ($this->descuentos as $key => $descuento) {
        ?>
        <tr>
        <td><?php echo $descuento['id'] ?></td>
        <td><?php echo $descuento['nombre'] ?></td>
        <td><?php echo $descuento['monto'] ?></td>
        <td><?php echo $descuento['nota_min'] ?> pts.</td>
        <td><a class="btn btn-success" href="<?php echo constant('URL'); ?>/Descuento/mostrarEditarDescuento/<?php echo $descuento['id'] ?>">Editar</a></td>
        <td><a class="btn btn-danger" href="<?php echo constant('URL'); ?>/Descuento/eliminarDescuento/<?php echo $descuento['id'] ?>">Eliminar</a></td>
        </tr>
        
      <?php } ?>
    </tr>
  </tbody>
</table>
</div>

<?php require 'Views/app/footer.php' ?>
