<?php


namespace App\controllers;

use App\core\Controller;
use App\models\AdministrateurModel;


class AdministrateurController
{
    use Controller;
    use AdministrateurModel;
    public function index()
    {
        $r =  $this->getUers();
        $s =  $this->getRoles();
        self::view('administrateur', ['r' => $r, 's' => $s]);
    }
    public function editRole($id, $idRole)
    {

        // Your edit method logic here
        // $id = $_GET['id'];
        // $idRole = $_GET['idRole'];
        $this->setId($id);
        $this->setIdRole($idRole);
        $this->modifierRole();
        $r =  $this->getUers();
        $s =  $this->getRoles();
        $this->index();
        // Assuming you have a method like render in your Controller trait for rendering views

    }
}
