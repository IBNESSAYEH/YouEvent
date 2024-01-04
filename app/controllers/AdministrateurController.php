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
        $chat = $this->getReservation();
        self::view('administrateur', ['r' => $r, 's' => $s, 'chat'=> $chat]);
    }
    public function editRole($id, $idRole)
    {
        $this->setId($id);
        $this->setIdRole($idRole);
        $this->modifierRole();
        $r =  $this->getUers();
        $s =  $this->getRoles();
        $this->index();
    }
}
