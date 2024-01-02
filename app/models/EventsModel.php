<?php 

namespace App\models;

use App\core\Model;

class EventsModel extends Model{

    protected $table = "events";
    protected $allowedColumns = [
        "id",	
        "nom",	
        "artiste",	
        "description",	
        "dateEvents",	
        "id_user",	
        "id_lieu",	
    ];


}