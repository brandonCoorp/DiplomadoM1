
    <?php require 'Views/app/header.php' ?>

<div id="main_list" class="main-list">
<h1 class="center">Esta es la vista de Profesores</h1>

<?php if($this->mensaje!="")
echo $this->mensaje;
?>
<a href="<?php echo constant('URL'); ?>Profesor/verRegistrarProfesor" class="btn btn-primary right" role="button">Nuevo</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Telefono</th>
      <th scope="col">Grado</th>
      <th scope="col">Fecha Ingreso</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

       foreach ($this->profesores as $key => $profesor) {
        ?>
        <tr>
        <td><?php echo $profesor['codigo'] ?></td>
        <td><?php echo $profesor['nombre'] ?></td>
        <td><?php echo $profesor['apellidos'] ?></td>
        <td><?php echo $profesor['telefono'] ?></td>
        <td><?php echo $profesor['grado'] ?></td>
        <td><?php echo $profesor['fecha_ingreso'] ?></td>
        
        
        <td><a class="btn btn-success" href="<?php echo constant('URL'); ?>/Profesor/verEditarProfesor/<?php echo $profesor['id'] ?>">Editar</a></td>
        <td><a class="btn btn-danger" href="<?php echo constant('URL'); ?>/Profesor/EliminarProfesor/<?php echo $profesor['id'] ?>">Eliminar</a></td>
        </tr>
        
      <?php } ?>
    </tr>
  </tbody>
</table>
</div>

<?php require 'Views/app/footer.php' ?>
