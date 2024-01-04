<?php

namespace App\controllers;

use App\core\Controller;
use App\models\ReservationModel;

class ReservationController {
    use Controller;
    use ReservationModel;
    public function index($a = []){
        
       
        $reservations = $this->getEventById(1);
       
     
        self::view('reservation', ['reservations' => $reservations]);
    }
    public function reserver($idUser = "",$idEvent = "", $qte = ""){
        
        
        if(!empty($idUser) && !empty($idEvent)){
            $this->setDateDeCreation(date("Y-m-d H:i:s"));
            $this->setPrixTotal(50)   ;
            $this->setIdUser($idUser);
            $this->setIdEvent($idEvent);
            $this->setQte(intval($qte));
            $this->createEvent();
            header("location: http://localhost/youevent/public/home/");
        }
        // $reservations = $this->getEventById(1);
       
        
        // self::view('home');
    }
}
