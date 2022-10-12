<?php

class MainController extends Controller{
    function __construct(){
        parent::__construct();
     //   $this->view->render('main/index');
     //   echo("new controller");
    }
    public function renderizar($vista){
        $this->view->render('main/'.$vista);
         
    }
    public function index(){
      $this->renderizar('index');
   }

    function saludar(){
        echo ("<h1>Hola mundo</h1>");
    }

}

?>