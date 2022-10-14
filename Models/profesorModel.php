<?php

class ProfesorModel extends Model{
    function __construct(){
        parent::__construct();
    }
    public function getProfesor($id){
        $item = [];
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM profesor WHERE id = :id');
            $query->execute([
                'id' => $id,
            ]);  
            while ($row = $query->fetch()) {
                $item = [
                    'id' =>$row['id'],
                    'cod_profesor' =>$row['cod_profesor'],
                    'password_user'=>$row['password_user'],
                    'fecha_ingreso'=>$row['fecha_ingreso'],
                    'sueldo'=>$row['sueldo'],           
                    'profesion'=>$row['profesion'],
                    'grado_id'=>$row['grado_id'],
                    'persona_id'=>$row['persona_id'],
                    'director_id'=>$row['director_id'],
                ];
            }
              return $item;
           } catch (PDOException $e) {
               return false;
           }
    }


    public function setProfesor($datos){
        //var_dump($datos);	id	cod_profesor,password_p, fecha_ingreso, sueldo, profesion ,grado_id, persona_id
        try {
            $query = $this->db->connect()->prepare('INSERT INTO profesor (cod_profesor, password_user, fecha_ingreso, sueldo, profesion ,grado_id, persona_id, director_id) VALUES (:cod_profesor,:password_p, :fecha_ingreso, :sueldo, :profesion ,:grado_id, :persona_id, :director_id)');
            $query->execute([
                'cod_profesor' =>$datos['cod_profesor'],
                'password_p'=>$datos['password_p'],
                'fecha_ingreso'=>$datos['fecha_ingreso'],
                'sueldo'=>$datos['sueldo'],           
                'profesion'=>$datos['profesion'],
                'grado_id'=>$datos['grado_id'],
                'persona_id'=>$datos['persona_id'],
                'director_id' => $datos['director_id'],
            ]);
            //var_dump($query);
              return true;
           } catch (PDOException $e) {
            var_dump($e);
               return false;
        }
    }
    public function getProfesores($director_id){
        $items = [];
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM profesor where director_id = :director_id');
            $query->execute([
                'director_id' => $director_id,
            ]);  
            while ($row = $query->fetch()) {
                $item = [
                 'id' =>$row['id'],
                 'cod_profesor' =>$row['cod_profesor'],
                 'password_user'=>$row['password_user'],
                 'fecha_ingreso'=>$row['fecha_ingreso'],
                 'sueldo'=>$row['sueldo'],           
                 'profesion'=>$row['profesion'],
                 'grado_id'=>$row['grado_id'],
                 'persona_id'=>$row['persona_id'],
                 
                ];
                array_push($items,$item);
            }
              return $items;
           } catch (PDOException $e) {
               return [];
           }
    }
    public function getProfesorByName($nombre){
        $items = [];
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM profesor WHERE cod_profesor = :cod_profesor');
            $query->execute([
                'cod_profesor' => $nombre,
            ]);  
            
            while ($row = $query->fetch()) {
                $item = [
                    'id' => $row['id'],
                    'cod_profesor' => $row['cod_profesor'],
                    'password_user' => $row['password_user'],
                    'fecha_ingreso' => $row['fecha_ingreso'],
                    'sueldo' => $row['sueldo'],
                    'profesion' => $row['profesion'],
                    'grado_id' => $row['grado_id'],
                    'persona_id' => $row['persona_id'],
                ];
                array_push($items,$item);
            }
            if($items == []){return $items;}
             else { return $items[0];}
           } catch (PDOException $e) {
               return [];
           }
    }
    
    public function updateProfesor($dato){
        //var_dump($dato);
        try {
            $query = $this->db->connect()->prepare('UPDATE profesor SET cod_profesor = :cod_profesor, fecha_ingreso = :fecha_ingreso,  sueldo = :sueldo, profesion = :profesion, grado_id = :grado_id, persona_id = :persona_id  WHERE id = :id_profesor');
            $query->execute([
                'id_profesor' => $dato['id'],
                'cod_profesor' => $dato['cod_profesor'],
                'fecha_ingreso' => $dato['fecha_ingreso'],
                'sueldo' => $dato['sueldo'],
                'profesion' => $dato['profesion'],
                'grado_id' => $dato['grado_id'],
                'persona_id' => $dato['persona_id'],
            ]);  
            
              return true;
           } catch (PDOException $e) {
            //var_dump($e);
               return false;
           }
     }
     public function deleteProfesor($dato){
        //var_dump($dato);
            try {
                $query = $this->db->connect()->prepare('DELETE FROM profesor WHERE id = :id');
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