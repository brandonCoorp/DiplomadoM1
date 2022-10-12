<?php
require_once 'Controllers/failController.php';
class App{
    function __construct(){
        //echo "desde App";
        session_start();
        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
       // var_dump( $url);

        if(empty($url[0])){
           $this->IndexPrincipal();
            return false;
        }
        $this->CargaController($url);
    }

    public function CargaController($url){
        $controllerName = ucfirst($url[0].'Controller');
        $archivoController = 'Controllers/'.$controllerName.'.php';
        $nparam =sizeof($url);
        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $controllerName;
            $controller->loadModel($url[0]);
            if(isset($url[1])){
                if ($nparam >2) {
                    $param = [];
                    for ($i=2; $i < $nparam ; $i++) { 
                       array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                  }else{
                    $controller->{$url[1]}();
                  }
            }else{
                $controller->index();
            }
        }else{
           $controller = new FailController();
        }
    }
    public function IndexPrincipal(){
        $archivoController = 'Controllers/loginController.php';
            require_once $archivoController;
            $controller = new LoginController();
           // $controller->loadModel('main');
            $controller->index();
      }
}

?>