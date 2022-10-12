<?php

class View{
    function __construct(){
       // echo("new VIEW");
    }

    function render($nombre){
        require 'Views/'.$nombre.'.php';
    }
}

?>