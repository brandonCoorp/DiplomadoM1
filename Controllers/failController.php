<?php
class  FailController extends Controller{
 function __construct(){
   parent::__construct();
   $this->view->message = 'Error 505 no hay respuesta del servidor';
   $this->view->render('error/index');
 //   echo "<p>Error al Cargar el Recurso</p>";
 }
}


?>