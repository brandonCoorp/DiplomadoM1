<?php
require_once ("Models/directorModel.php");
require_once ("Models/profesorModel.php");
class LoginController extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
        $this->profesor ="";
        $this->director ="";
      //  $this->view->render('director/login');
    }
    public function renderizar($vista){
        $this->view->render('login/'.$vista);
         
    }
    public function index(){
      $this->renderizar('login');
   }

   public function Ingresar(){
    $datos = [
        'password' => md5($_POST['password']),
        'codigo' =>$_POST['codigo'],
        'tipo' => $_POST['tipo'],
      ];
     $response = $this->VerificarCredenciales($datos);
    
        if($response['response']){
            var_dump("logarse");
            $this->IniciarSesion($response['usuario'], $datos['tipo'], $datos['codigo']);
        }else{
            $this->view->mensaje =$this->mensaje->error("Datos Invalidos");
            $this->renderizar('login');
        }

   }

    private function VerificarCredenciales($datos){
        $modelName = $datos['tipo'].'Model';
        $method = 'get'.$datos['tipo'].'ByName';
        $usuarioModel = new $modelName;
        $response =  $usuarioModel->{$method}($datos['codigo']);
        $resp = [
            'response' => false,
            'usuario' => [],
        ];
        if($response != []){
            if($datos['password'] == $response['password_user']){
                $resp = [
                    'response' => true,
                    'usuario' => $response,
                ];
            }
        }
        
       return $resp;
        
    }

   private function IniciarSesion($usuario, $tipo , $codigo){
    $this->session->init();
    $this->session->add('codigo', $codigo);
    $this->session->add('id', $usuario['id']);
    $this->session->add('persona_id', $usuario['persona_id']);
    $this->session->add('tipo', $tipo);
    //var_dump($_SESSION);
    $this->redirect($tipo);
    exit;
    }
    public function logout(){
        $this->session->close();
        $this->redirect('login');
    }
    

}

?>