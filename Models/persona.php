<?php

class Persona extends Model{
    function __construct(){
        parent::__construct();
    }


    public function mostrar($id){
        $item = [];
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM persona WHERE id = :id');
            $query->execute([
                'id' => $id,
            ]);  
            while ($row = $query->fetch()) {
                $item = [
                    'id' =>$row['id'],
                    'nombre' =>$row['nombre'],
                    'apellido_paterno' =>$row['apellido_paterno'],
                    'apellido_materno'=>$row['apellido_materno'],
                    'direccion'=>$row['direccion'],
                    'telefono'=>$row['telefono'],
                ];
            }
              return $item;
           } catch (PDOException $e) {
               return false;
           }
    }
    public function añadir($datos){
        try {
            $query = $this->db->connect()->prepare('INSERT INTO persona (nombre,apellido_paterno,apellido_materno, direccion, telefono) 
            VALUES (:nombre, :apellido_paterno, :apellido_materno, :direccion, :telefono)');
            $query->execute([
                'nombre' =>$datos['nombre'],
                'apellido_paterno' =>$datos['apellido_paterno'],
                'apellido_materno'=>$datos['apellido_materno'],
                'direccion'=>$datos['direccion'],
                'telefono'=>$datos['telefono'],
            ]);
            $item = $this->obtenerUltimoRegistro();
            $response = [
                'resp' => true,
                'persona' => $item['id'],
            ];
              return $response;
           } catch (PDOException $e) {
            $response = [
                'resp' => false,
                'persona' => [],
            ];
               return $response;
           }
       
    }
    public function editar($dato){
        try {
            $query = $this->db->connect()->prepare('UPDATE persona SET  nombre = :nombre, apellido_paterno = :apellido_paterno, 
            apellido_materno = :apellido_materno,  direccion = :direccion, telefono = :telefono WHERE id = :id');
            $query->execute([
                'nombre' =>$dato['nombre'],
                'apellido_paterno' =>$dato['apellido_paterno'],
                'apellido_materno'=>$dato['apellido_materno'],
                'direccion'=>$dato['direccion'],
                'telefono'=>$dato['telefono'],
                'id'=>$dato['id'],
                
            ]);  
            
              return true;
           } catch (PDOException $e) {
               return false;
           }
     }
   public function eliminar($dato){
    //var_dump($dato);
        try {
            $query = $this->db->connect()->prepare('DELETE FROM persona WHERE id = :id');
            $query->execute([
                'id' => $dato,
            ]);        
              return true;
           } catch (PDOException $e) {
               return false;
           }
     }
   
    private function obtenerUltimoRegistro(){
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM persona order by id desc  limit 1');
            $query->execute();
            $item ="";
            while ($row = $query->fetch()) {
                $item = [
                    'id' =>$row['id'],
                    'nombre' =>$row['nombre'],
                    'apellido_paterno' =>$row['apellido_paterno'],
                    'apellido_materno'=>$row['apellido_materno'],
                    'direccion'=>$row['direccion'],
                    'telefono'=>$row['telefono'],
                ];
            }
          
              return $item;
           } catch (PDOException $e) {
               return false;
           }
    }

}

?>