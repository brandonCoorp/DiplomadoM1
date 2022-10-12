<?php

class GradoModel extends Model{
    function __construct(){
        parent::__construct();
    }


    public function getGrado($id){
        $item = [];
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM grado WHERE id = :id');
            $query->execute([
                'id' => $id,
            ]);  
            while ($row = $query->fetch()) {
                $item = [
                    'id' =>$row['id'],
                    'codigo' =>$row['codigo'],
                    'nombre'=>$row['nombre'],
                    'descripcion'=>$row['descripcion'],
                ];
            }
              return $item;
           } catch (PDOException $e) {
               return false;
           }
    }

    public function getGrados($director_id){
        $items = [];
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM grado where director_id = :director_id ');
            $query->execute([
                'director_id' => $director_id,
            ]);  
            while ($row = $query->fetch()) {
                $item = [
                 'id' =>$row['id'],
                 'codigo' =>$row['codigo'],
                 'nombre'=>$row['nombre'],
                 'descripcion'=>$row['descripcion'],
                ];
                array_push($items,$item);
            }
              return $items;
           } catch (PDOException $e) {
               return [];
           }
    }
    public function updateGrado($dato){
        try {
            $query = $this->db->connect()->prepare('UPDATE grado SET codigo = :codigo, nombre = :nombre,  descripcion = :descripcion WHERE id = :grado');
            $query->execute([
                'codigo' => $dato['codigo'],
                'nombre' => $dato['nombre'],
                'descripcion' =>$dato['descripcion'],
                'grado' => $dato['id'],
            ]);  
            
              return true;
           } catch (PDOException $e) {
               return false;
           }
     }
    public function setGrado($datos){
      //  echo("isert data");
        try {
            $query = $this->db->connect()->prepare('INSERT INTO grado (codigo,nombre,descripcion, director_id) VALUES (:codigo, :nombre, :descripcion, :director_id)');
            $query->execute([
                'nombre' => $datos['nombre'],
                'descripcion' => $datos['descripcion'],
                'codigo' => $datos['codigo'],
                'director_id' => $datos['director_id'],
            ]);
              return true;
           } catch (PDOException $e) {
               return false;
           }
       
    }

   public function deleteGrado($dato){
   // var_dump($dato);
        try {
            $query = $this->db->connect()->prepare('DELETE FROM grado WHERE id = :id');
            $query->execute([
                'id' => $dato,
            ]);        
              return true;
           } catch (PDOException $e) {
               return false;
           }
     }
    

}

?>