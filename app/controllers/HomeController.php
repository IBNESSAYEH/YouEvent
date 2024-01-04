<?php

namespace App\controllers;

use App\core\Controller;
use App\models\EventsModel;

class HomeController {
    
    use Controller;
    use EventsModel;

    public function index() {
        $events = $this->getEvents();
    
        self::view('home', ['events' => $events]);
    }
    public function detail($url) {
       
        $event = $this->getEventById($url);
   
        self::view('detail', ['event' => $event]);
    }

    // public function edit() {

    //    $this->setNom("journeeIntegration");
    //    $this->setID(5);
    //    $this->setArtiste("weld lhowwat");
    //    $this->setDescription("journeeIntegratisssssssssssssson");
    //    $this->setDateEvents("20/12/2020");
    //    $this->setIdUser(7);
    //    $this->setIdLieu(5);
    //    $this->updateEvent();

    // }
}
