<?php
require_once ("Models/gradoModel.php");
require_once ("Models/profesorModel.php");
require_once ("Models/descuentoModel.php");
class InscripcionController extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
       // $this->view->render('grado/ListarGrado');
    }

    public function renderizar($vista){
        $this->view->render('Inscripcion/'.$vista);
         
    }

    public function index(){
       
      $this->verRegistarInscripcion();
   }
  
    public function verRegistarInscripcion(){
        $profesor_id =  $this->session->get('id');
        $model_profesor = new ProfesorModel();
       $profesor = $model_profesor->getProfesor($profesor_id);
        $this->view->profesor =$profesor;
       $model_descuento = new DescuentoModel();
       $descuentos = $model_descuento->getDescuentos($profesor['director_id']);
       $this->view->descuentos =$descuentos;
       $model_grados = new GradoModel();
       $grado = $model_grados->getGrado($profesor['grado_id']);
       $this->view->grado =$grado;
       //var_dump($profesor['director_id']);
        $this->renderizar('nuevaInscripcion');
        
    }
    public function MostrarEditarGrado($id){
        $grado = $this->model->getGrado($id[0]);
        $this->view->grados = $grado;
        $this->renderizar('EditarGrado');
        
    }
    public function guardarInscripcion(){
       // echo("registrado");
        $director_id =  $this->session->get('id');
       
       //fecha	gestion	cod_alumno	grado_id	descuento_id	
       
       $persona = $this->guardarPersona();
       $alumno = $this->guardarAlumno();
        $datos_insrcipcion=[
            'fecha' => $_POST['fecha'],
            'gestion' => $_POST['gestion'],
            'cod_alumno' => $alumno['cod_alumno'], 
            'grado_id' => $_POST['grado_id'], 
            'descuento_id' => $_POST['descuento_id'], 
        ];
        
        $response = $this->model->setInscripcion($datos);
        if($response){
            $this->view->mensaje = $this->mensaje->success("Grado Create");
        }else{
            $this->view->mensaje =$this->mensaje->error("Error al Registrar Grado");
        }
        $this->index();
    }
    public function guardarPersona(){
        $datos_persona=[
            'codigo' => $_POST['codigo'],
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'], 
            'director_id' => $director_id, 
        ];

    }

    public function guardarAlumno(){
        $datos_alumno=[
            'codigo' => $_POST['codigo'],
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'], 
            'director_id' => $director_id, 
        ];
        
    }

    public function EditarGrado(){
        // echo("registrado");
 
         $datos=[
            'id' => $_POST['id'],
             'codigo' => $_POST['codigo'],
             'nombre' => $_POST['nombre'],
             'descripcion' => $_POST['descripcion'], 
         ];
         $response = $this->model->updateGrado($datos);
         if($response){
             $this->view->mensaje = $this->mensaje->success("Grado Actualizado");
         }else{
             $this->view->mensaje =$this->mensaje->error("Error al Registrar Grado");
         }
         $this->index();
     }
 

    public function EliminarGrado($dato){
        //var_dump($dato);
        $response = $this->model->deleteGrado($dato[0]);
        if($response){
            $this->view->mensaje = $this->mensaje->success("Grado Eliminado Correctamente");
        }else{
            $this->view->mensaje =$this->mensaje->error("Error al Eliminar el Grado");
        }
        $this->index();
    
      }

    private function validar($datos){

    }

}

?>