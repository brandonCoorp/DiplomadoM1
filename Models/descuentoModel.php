<?php

class DescuentoModel extends Model{
    function __construct(){
        parent::__construct();
    }


    public function getDescuento($id){
        $item = [];
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM descuento WHERE id = :id');
            $query->execute([
                'id' => $id,
            ]);  
            while ($row = $query->fetch()) {
                $item = [
                    'id' =>$row['id'],
                    'nombre' =>$row['nombre'],
                    'descripcion'=>$row['descripcion'],
                    'director_id'=>$row['director_id'],
                    'monto'=>$row['monto'],
                    'nota_min'=>$row['nota_min'],
                    
                ];
            }
              return $item;
           } catch (PDOException $e) {
               return false;
           }
    }

    public function getDescuentos($director_id){
        $items = [];
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM descuento where director_id = :director_id ');
            $query->execute([
                'director_id' => $director_id,
            ]);  
            while ($row = $query->fetch()) {
                $item = [
                    'id' =>$row['id'],
                    'nombre' =>$row['nombre'],
                    'descripcion'=>$row['descripcion'],
                    'monto'=>$row['monto'],
                    'nota_min'=>$row['nota_min'],
                    'director_id'=>$row['director_id'],
                ];
                array_push($items,$item);
            }
              return $items;
           } catch (PDOException $e) {
               return [];
           }
    }
    public function updateDescuento($dato){
        try {
            $query = $this->db->connect()->prepare('UPDATE descuento SET  nombre = :nombre,  descripcion = :descripcion, monto = :monto,  nota_min = :nota_min WHERE id = :descuento');
            $query->execute([
                'nombre' =>$dato['nombre'],
                'descripcion'=>$dato['descripcion'],
                'monto'=>$dato['monto'],
                'nota_min'=>$dato['nota_min'],
                'descuento' => $dato['id'],
            ]);  
            
              return true;
           } catch (PDOException $e) {
               return false;
           }
     }
    public function setDescuento($datos){
      //  echo("isert data");
     //var_dump($datos);
        try {
            $query = $this->db->connect()->prepare('INSERT INTO descuento (nombre, descripcion, monto, nota_min, director_id) VALUES (:nombre, :descripcion, :monto, :nota_min, :director_id)');
            $query->execute([
                'nombre' => $datos['nombre'],
                'descripcion'=> $datos['descripcion'],
                'monto'=> $datos['monto'],
                'nota_min'=> $datos['nota_min'],
                'director_id'=> $datos['director_id'],
            ]);
              return true;
           } catch (PDOException $e) {
           var_dump($e);
               return false;
           }
       
    }

   public function deleteDescuento($dato){
   // var_dump($dato);
        try {
            $query = $this->db->connect()->prepare('DELETE FROM descuento WHERE id = :id');
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