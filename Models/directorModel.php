<?php

class DirectorModel extends Model{
    function __construct(){
        parent::__construct();
    }

    public function setDirector($datos){
        //var_dump($datos);
        try {
            $query = $this->db->connect()->prepare('INSERT INTO director (cod_director, password_user, fecha_ingreso, persona_id) VALUES (:cod_director, :password_d, :fecha_ingreso, :persona_id)');
            $query->execute([
                'cod_director' => $datos['cod_director'],
                'password_d' => $datos['password_d'],
                'fecha_ingreso' => $datos['fecha_ingreso'],
                'persona_id' => $datos['persona_id'],
            ]);
            //var_dump($query);
              return true;
           } catch (PDOException $e) {
            var_dump($e);
               return false;
        }
    }

    public function getDirectorByName($nombre){
        $items = [];
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM director WHERE cod_director = :cod_director');
            $query->execute([
                'cod_director' => $nombre,
            ]);  
            
            while ($row = $query->fetch()) {
                $item = [
                    'id' => $row['id'],
                    'cod_director' => $row['cod_director'],
                    'password_user' => $row['password_user'],
                    'fecha_ingreso' => $row['fecha_ingreso'],
                    'persona_id' => $row['persona_id'],
                ];
                array_push($items,$item);
            }
              return $items[0];
           } catch (PDOException $e) {
               return [];
           }
    }

}

?>