<?php


namespace App\controllers;

use App\core\Controller;
use App\models\EventsModel;


class AdministrateurController extends Controller{
    public function administrateur(){
        self::view('administrateur');
    }
}