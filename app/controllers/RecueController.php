<?php

namespace App\controllers;

use App\core\Controller;
use App\models\RecueModel;

class RecueController {
    use Controller;
    use RecueModel;
    public function mesRecue($idUser = ""){
        
       
        
        $mesRecue = $this->getRecue($idUser);
     
        self::view('recue', ['recue' => $mesRecue]);
    }
 
}
