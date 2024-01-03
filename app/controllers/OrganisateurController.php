<?php

namespace App\controllers;

use App\core\Controller;

class OrganisateurController extends Controller{
    public function index(){
       
        self::view('Organisateur');
    }
}