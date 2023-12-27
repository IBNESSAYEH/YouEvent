<?php 

namespace App\core;

use App\core\Database;

class Model extends Database{
    
    public function test(){
        $query = "select * from users";
        $result = $this->query($query);
        return $result;
    }
}