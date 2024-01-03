<?php 

namespace App\core;

use App\core\Database;

class Model extends Database{

    protected $table ;
    
    public function finAll(){
        $query = "SELECT * from $this->table ";
        return $this->query($query);
    }

    public function where($data = [], $data_not = []){
        $query = "SELECT * from $this->table where ";

        $keys = array_keys($data);
        $keys_not = array_keys($data_not);

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");

        $data = array_merge($data, $data_not);
    

        return $this->query($query, $data);
        
    }
    
    public function find($data = [], $data_not = []){
        $query = "SELECT * from $this->table where ";

        $keys = array_keys($data);
        $keys_not = array_keys($data_not);

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");

        $data = array_merge($data, $data_not);
    

        $result = $this->query($query, $data);

        if($result)
            return $result[0];
        else
            return false;
    }
    public function insert($data){

        // if(!empty($this->allowedColumns)){
        //     foreach($data as $key => $value){
        //         if(!in_array($key, $this->allowedColumns)){
        //             unset($data[$key]);
        //         }
        //     }
        // }



        $keys = array_keys($data);
        $query = "INSERT into $this->table  (".implode(" , ",$keys).") VALUES (:".implode(" , :",$keys).") ";
        
        $this->query($query, $data);
    }
    public function update($id, $data , $id_column = "id"){
        $query = "UPDATE $this->table  set  ";

        $keys = array_keys($data);

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . ", ";
        }


        $query = trim($query, ", ");

        $query .= " WHERE $id_column = :$id_column";

      
        $data[$id_column] = $id;

         $this->query($query, $data);
    
        
    }
    public function delete($id, $id_column = "id"){
        $data[$id_column] = $id;
        $query = "DELETE FROM $this->table WHERE $id_column = :$id_column";
        $this->query($query, $data);

        return false;
    }


}