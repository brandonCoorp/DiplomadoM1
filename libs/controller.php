<?php

class Controller{
    function __construct(){
    //    echo("new controller END");
        $this->view = new View();
        $this->mensaje = new Mensaje();
        $this->session = new Session();
    }
    function loadModel($model){
        $url = 'Models/'.$model.'Model.php';
        if(file_exists($url)){
            require $url;
            $modelName =ucfirst($model.'Model');
            $this->model = new $modelName();
        }
    }
    function redirect($url){
        header('location: /DiplomadoM1/'.$url);
    }
}

?>