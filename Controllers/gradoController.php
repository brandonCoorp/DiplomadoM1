<?php

class GradoController extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->grados=[];
        $this->view->mensaje = "";
       // $this->view->render('grado/ListarGrado');
    }

    public function renderizar($vista){
        $this->view->render('Grado/'.$vista);
         
    }

    public function index(){
        $director_id =  $this->session->get('id');
        $grados = $this->model->getGrados($director_id);
        $this->view->grados = $grados;
      $this->renderizar('ListarGrado');
   }
  
    public function verRegistarGrado(){
        $this->renderizar('RegistrarGrado');
        
    }
    public function MostrarEditarGrado($id){
        $grado = $this->model->getGrado($id[0]);
        $this->view->grados = $grado;
        $this->renderizar('EditarGrado');
        
    }
    public function RegistarGrado(){
       // echo("registrado");
        $director_id =  $this->session->get('id');
        $datos=[
            'codigo' => $_POST['codigo'],
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'], 
            'director_id' => $director_id, 
        ];
        $response = $this->model->setGrado($datos);
        if($response){
            $this->view->mensaje = $this->mensaje->success("Grado Create");
        }else{
            $this->view->mensaje =$this->mensaje->error("Error al Registrar Grado");
        }
        $this->index();
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