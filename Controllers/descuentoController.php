<?php

class DescuentoController extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->descuentos=[];
        $this->view->mensaje = "";
       // $this->view->render('grado/ListarGrado');
    }

    public function renderizar($vista){
        $this->view->render('descuento/'.$vista);
         
    }

    public function index(){
      $this->mostrarListarDescuento();
   }
  
    public function verRegistarDescuento(){
        $this->renderizar('RegistrarDescuento');
        
    }
    public function mostrarEditarDescuento($id){
        $descuento = $this->model->getDescuento($id[0]);
        $this->view->descuentos = $descuento;
        $this->renderizar('editarDescuento');
        
    }

    public function mostrarListarDescuento(){
        $director_id =  $this->session->get('id');
        $descuentos =$this->model->getDescuentos($director_id);
      //  var_dump($profesores);

        $this->view->descuentos = $descuentos;
        $this->renderizar('listarDescuento');
        
    }




    public function registarDescuento(){
       // echo("registrado");
        $director_id =  $this->session->get('id');
        $datos=[
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'],
            'monto' => $_POST['monto'],
            'nota_min' => $_POST['nota_min'], 
            'director_id' => $director_id, 
        ];
        $response = $this->model->setDescuento($datos);
        if($response){
            $this->view->mensaje = $this->mensaje->success("Descuento Create");
        }else{
            $this->view->mensaje =$this->mensaje->error("Error al Registrar Descuento");
        }
        $this->index();
    }

    public function editarDescuento(){
        // echo("registrado");
 
         $datos=[
            'id' => $_POST['id'],
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'],
            'monto' => $_POST['monto'],
            'nota_min' => $_POST['nota_min'], 
         ];
         $response = $this->model->updateDescuento($datos);
         if($response){
             $this->view->mensaje = $this->mensaje->success("Descuento Actualizado");
         }else{
             $this->view->mensaje =$this->mensaje->error("Error al Registrar Descuento");
         }
         $this->index();
     }
 

    public function eliminarDescuento($dato){
        //var_dump($dato);
        $response = $this->model->deleteDescuento($dato[0]);
        if($response){
            $this->view->mensaje = $this->mensaje->success("Descuento Eliminado Correctamente");
        }else{
            $this->view->mensaje =$this->mensaje->error("Error al Eliminar el Descuento");
        }
        $this->index();
    
      }

    private function validar($datos){

    }

}

?>