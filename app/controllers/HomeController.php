<?php

namespace App\controllers;

use App\core\Controller;
use App\core\Model;

class HomeController extends Controller{
    public function index(){
        

        $model = new Model();
        
        $arr["ville"] = "casa";
        $arr["paye"] = "maroc";
        $result = $model->update(10, $arr);   
        // var_dump($result);
        self::view('home');
    }
}


