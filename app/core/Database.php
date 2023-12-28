<?php 

namespace App\core;


use PDO;
use PDOException;


require "config.php";
class Database{

   
    private $DBNAME = DBNAME;
    private $DBUSER = DBUSER;
    private $DBHOST = DBHOST;
    private $DBPASSWORD = DBPASSWORD;

    private function connect(){
        try {
            $con = new PDO("mysql:host=$this->DBHOST;dbname=$this->DBNAME", $this->DBUSER, $this->DBPASSWORD);
            // set the PDO error mode to exception
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
            
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }


    public function query($query, $data = []){
        $con = $this->connect();
        $stmt = $con->prepare($query);
        $check = $stmt->execute($data); 
        if($check){
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result) && count($result)){
                return $result;
            }else{
                return false;
            }
        }

    }



    // get one row from database
    public function get_one_row($query, $data = []){
        $con = $this->connect();
        $stmt = $con->prepare($query);
        $check = $stmt->execute($data); 
        if($check){
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result) && count($result)){
                return $result;
            }else{
                return false;
            }
        }

    }




}