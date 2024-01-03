<?php

namespace App\controllers;

use App\core\Controller;
use App\models\EventsModel;

class ReservationController extends Controller{
    public function index($a = []){
        
        $a =   $a[0] ?? []   ;
        
          
        
        self::view('reservation');
    }
    public function edit(){
        
        
          
        
        self::view('home');
    }
}
