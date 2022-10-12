<?php
class Mensaje{
    
    
    public function __construct(){
        $this->mensaje = "";       
    }
    public function success($mensaje){
     $this->mensaje = '<div class="alert alert-info center" role="alert">'.$mensaje.'</div>';
    return $this->mensaje;
    }
    public function error($mensaje){
        $this->mensaje = '<div class="alert alert-danger" role="alert">'.$mensaje.'</div>';
       return $this->mensaje;
       }
}

?>