<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php echo constant('URL'); ?>public/css/app.css" rel="stylesheet" type="text/css"/> 
</head>
<body>
    <header>
        
        <div class="header">
        <?php if( $_SESSION['tipo'] =='Director'){?>
          
            <ul>
                <li><a href="<?php echo constant('URL'); ?>director">Inicio</a></li>
                <li><a href="<?php echo constant('URL'); ?>profesor/MostrarListarProfesor">Profesor</a></li>
                <li><a href="<?php echo constant('URL'); ?>grado">Grado</a></li>
                <li><a href="<?php echo constant('URL'); ?>descuento">Descuento</a></li>
                <li><a href="<?php echo constant('URL'); ?>login/logout">Cerrar Sesion</a></li>
            </ul>
            <?php }else{ ?>

            <ul>
                <li><a href="<?php echo constant('URL'); ?>profesor">Inicio</a></li>
                <li><a href="<?php echo constant('URL'); ?>inscripcion">Inscripcion</a></li>
                <li><a href="<?php echo constant('URL'); ?>notas">Notas</a></li>
                <li><a href="<?php echo constant('URL'); ?>profesor/dashboard">Profesor</a></li>
                <li><a href="<?php echo constant('URL'); ?>login/logout">Cerrar Sesion</a></li>
            </ul>
            <?php } ?>

        </div>


    </header>
</body>
</html>