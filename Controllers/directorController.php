<?php
require_once ("Models/persona.php");
class directorController extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
        $this->persona = new Persona() ;
      //  $this->view->render('director/login');
    }
    public function renderizar($vista){
        $this->view->render('director/'.$vista);
         
    }
    public function index(){
      $this->renderizar('mostrar');
   }
    public function MostrarRegistrar(){
        $this->renderizar('registrar');
        
    }

    function RegistrarDirector(){
      //  echo ("director creados");
      $response=false;
      $datos_persona=[
        'nombre' => $_POST['nombre'],
        'apellido_paterno' => $_POST['apellido_paterno'],
        'apellido_materno' => $_POST['apellido_materno'],
        'direccion' => $_POST['direccion'],
        'telefono' => $_POST['telefono'],
         ];
        $respuesta = $this->persona->añadir($datos_persona);
         if($respuesta['resp']){
            $datos_director=[
                'cod_director' => $_POST['cod_director'],
                'password_d' =>  md5($_POST['password_d']),
                'fecha_ingreso' => $_POST['fecha_ingreso'],
                'persona_id' => $respuesta['persona'],     
            ];
            $response = $this->model->setDirector($datos_director);
         }
          
        if($response){
            $this->view->mensaje = $this->mensaje->success("Director Create");
        }else{
            $this->view->mensaje =$this->mensaje->error("Error al Registrar Director");
        }
        $this->redirect('login');
    }

    

}

?>