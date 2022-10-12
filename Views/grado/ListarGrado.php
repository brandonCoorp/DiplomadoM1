
    <?php require 'Views/app/header.php' ?>

<div id="main_list" class="main-list">
<h1 class="center">Esta es la vista Grado</h1>

<?php if($this->mensaje!="")
echo $this->mensaje;
?>
<a href="<?php echo constant('URL'); ?>Grado/verRegistarGrado" class="btn btn-primary right" role="button">Nuevo</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
       foreach ($this->grados as $key => $grado) {
        ?>
        <tr>
        <td><?php echo $grado['id'] ?></td>
        <td><?php echo $grado['codigo'] ?></td>
        <td><?php echo $grado['nombre'] ?></td>
        <td><?php echo $grado['descripcion'] ?></td>
        <td><a class="btn btn-success" href="<?php echo constant('URL'); ?>/Grado/MostrarEditarGrado/<?php echo $grado['id'] ?>">Editar</a></td>
        <td><a class="btn btn-danger" href="<?php echo constant('URL'); ?>/Grado/EliminarGrado/<?php echo $grado['id'] ?>">Eliminar</a></td>
        </tr>
        
      <?php } ?>
    </tr>
  </tbody>
</table>
</div>

<?php require 'Views/app/footer.php' ?>
