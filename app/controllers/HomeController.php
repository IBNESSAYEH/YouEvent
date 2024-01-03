<?php

namespace App\controllers;

use App\core\Controller;
use App\models\EventsModel;

class HomeController {
    
    use Controller;
    use EventsModel;

    public function index() {
        $events = $this->getEvents(); // Assuming getEvents is a method in EventsModel trait
        
        // Assuming you have a method like render in your Controller trait for rendering views
        self::view('home', ['events' => $events]);
    }

    public function edit() {
        // Your edit method logic here

        // Assuming you have a method like render in your Controller trait for rendering views
        self::view('home');
    }
}
