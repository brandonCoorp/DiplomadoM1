<?php
require_once ("Models/persona.php");
require_once ("Models/gradoModel.php");
class ProfesorController extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
        $this->persona = new Persona() ;
        $this->view->profesores = [];
        $this->view->grados =[];
      //  $this->view->render('director/login');
    }
    public function renderizar($vista){
        $this->view->render('profesor/'.$vista);
         
    }
    public function index(){
        $this->renderizar('mostrarProfesor');
   }
   public function dashboard(){
    $this->renderizar('mostrarProfesor');
 }
    public function verRegistrarProfesor(){
        $gradoModel = new GradoModel();
        $director_id =  $this->session->get('id');
        $this->view->grados = $gradoModel->getGrados($director_id) ;
        $this->renderizar('registrarProfesor');
        
    }
    public function verEditarProfesor($id){
        $profesor =$this->model->getProfesor($id[0]);
        $gradoModel = new GradoModel();
        $director_id =  $this->session->get('id');
        $this->view->grados = $gradoModel->getGrados($director_id) ;
        $persona = $this->persona->mostrar($profesor['persona_id']);
        $this->view->profesor = $profesor ;
        $this->view->persona = $persona ;
        $this->renderizar('EditarProfesor');
        
    }

    public function MostrarListarProfesor(){
        $director_id =  $this->session->get('id');
        $profesores =$this->model->getProfesores($director_id);
      //  var_dump($profesores);
//var_dump($director_id );
        $profesoresResponse = [];
        foreach ($profesores as $key => $profesor) {
            $persona = $this->persona->mostrar($profesor['persona_id']);
            $apellidos = $persona['apellido_paterno'].' '.$persona['apellido_materno'];
            $gradoModel = new GradoModel();
            $gradoResponse = $gradoModel->getGrado($profesor['grado_id']) ;
            
            $profesorResponse = [
                'id' => $profesor['id'],
                'persona_id' => $profesor['persona_id'],
                'codigo' => $profesor['cod_profesor'],
                'nombre' => $persona['nombre'],
                'apellidos' => $apellidos,
                'telefono' =>$persona['telefono'],
                'grado' =>$gradoResponse['nombre'],
                'fecha_ingreso' =>$profesor['fecha_ingreso'],      
            ];
        array_push($profesoresResponse,$profesorResponse);
        }
        $this->view->profesores = $profesoresResponse;
        $this->renderizar('listarProfesor');
        
    }
    function RegistrarProfesor(){
      //  echo ("director creados");
      $director_id =  $this->session->get('id');
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
            $datos_profesor=[
                'cod_profesor' => $_POST['cod_profesor'],
                'password_p' =>  md5($_POST['password_p']),
                'fecha_ingreso' => $_POST['fecha_ingreso'],
                'sueldo' => $_POST['sueldo'],
                'profesion' => $_POST['profesion'],
                'grado_id' => $_POST['grado'],  
                'persona_id' => $respuesta['persona'],
                'director_id' => $director_id,    
                   
            ];
            $response = $this->model->setProfesor($datos_profesor);
         }
          
        if($response){
            $this->view->mensaje = $this->mensaje->success("Profesor Create");
        }else{
            $this->view->mensaje =$this->mensaje->error("Error al Registrar Profesor");
        }
        $this->redirect('profesor/MostrarListarProfesor');
    }

    function EditarProfesor(){
        //  echo ("director creados");
        $response=false;
        $datos_persona=[
          'id' => $_POST['persona_id'],
          'nombre' => $_POST['nombre'],
          'apellido_paterno' => $_POST['apellido_paterno'],
          'apellido_materno' => $_POST['apellido_materno'],
          'direccion' => $_POST['direccion'],
          'telefono' => $_POST['telefono'],
           ];
          $respuesta = $this->persona->editar($datos_persona);
           if($respuesta){	
              $datos_profesor=[
                'id' => $_POST['profesor_id'],
                  'cod_profesor' => $_POST['cod_profesor'],
                  'fecha_ingreso' => $_POST['fecha_ingreso'],
                  'sueldo' => $_POST['sueldo'],
                  'profesion' => $_POST['profesion'],
                  'grado_id' => $_POST['grado'],  
                  'persona_id' => $_POST['persona_id'],     
              ];
              $response = $this->model->updateProfesor($datos_profesor);
           }
            
          if($response){
              $this->view->mensaje = $this->mensaje->success("Profesor Actualizado");
          }else{
              $this->view->mensaje =$this->mensaje->error("Error al Actualizar Profesor");
          }
         // var_dump($response);
          $this->redirect('profesor/MostrarListarProfesor');
      }

      public function EliminarProfesor($dato){
        //var_dump($dato);
        $profesor = $this->model->getProfesor($dato[0]);
        $response = $this->model->deleteProfesor($dato[0]);
        if($response){
            $response = $this->persona->eliminar($profesor['persona_id']);
        }   
        if($response){
            $this->view->mensaje = $this->mensaje->success("Profesor Eliminado Correctamente");
        }else{
            $this->view->mensaje =$this->mensaje->error("Error al Eliminar el Profesor");
        }
        $this->MostrarListarProfesor();
    
      }
}

?>