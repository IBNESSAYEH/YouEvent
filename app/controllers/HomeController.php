<?php

namespace App\controllers;

use App\core\Controller;
use App\models\EventsModel;

class HomeController extends Controller{
    public function index($a = []){
        
        $a =   $a[0] ?? []  ;
        
          
        
        self::view('home');
    }
    public function edit(){
        
        
          
        
        self::view('home');
    }
}


