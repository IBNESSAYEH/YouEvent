<?php 




namespace App\models;

use App\core\Database;
use PDO;


trait EventsModel {
    use Database;

    private $connection;
    private $id;
    private $nom;
    private $artiste;
    private $description;
    private $dateEvents;
    private $id_user;
    private $id_lieu;













    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getArtiste()
    {
        return $this->artiste;
    }

    /**
     * @param mixed $artiste
     */
    public function setArtiste($artiste)
    {
        $this->artiste = $artiste;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDateEvents()
    {
        return $this->dateEvents;
    }

    /**
     * @param mixed $dateEvents
     */
    public function setDateEvents($dateEvents)
    {
        $this->dateEvents = $dateEvents;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getIdLieu()
    {
        return $this->id_lieu;
    }

    /**
     * @param mixed $id_lieu
     */
    public function setIdLieu($id_lieu)
    {
        $this->id_lieu = $id_lieu;
    }


  

 
    
        public function __construct()
        {
            $this->connection = $this->connect();
        }
    
        public function getEvents()
        {
            $query = $this->connection->prepare("SELECT * FROM events");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);
    
            return !empty($result) ? $result : false;
        }
    
        public function createEvent($event)
        {
            $query = $this->connection->prepare("INSERT INTO events(nom, artiste, description, dateEvents, id_user, id_lieu) VALUES(:nom, :artiste, :description, :dateEvents, :id_user, :id_lieu)");
            $query->bindValue(':nom', $event->getNom());
            $query->bindValue(':artiste', $event->getArtiste());
            $query->bindValue(':description', $event->getDescription());
            $query->bindValue(':dateEvents', $event->getDateEvents());
            $query->bindValue(':id_user', $event->getIdUser());
            $query->bindValue(':id_lieu', $event->getIdLieu());
            $query->execute();
        }
    
        public function getEventById($id)
        {
            $query = $this->connection->prepare("SELECT * FROM events WHERE id = :id");
            $query->bindValue(':id', $id);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_OBJ);
    
            return !empty($result) ? $result : false;
        }
    
        public function updateEvent($event)
        {
            $query = $this->connection->prepare("UPDATE events SET nom = :nom, artiste = :artiste, description = :description, dateEvents = :dateEvents, id_user = :id_user, id_lieu = :id_lieu WHERE id = :id");
            $query->bindValue(':id', $event->getId());
            $query->bindValue(':nom', $event->getNom());
            $query->bindValue(':artiste', $event->getArtiste());
            $query->bindValue(':description', $event->getDescription());
            $query->bindValue(':dateEvents', $event->getDateEvents());
            $query->bindValue(':id_user', $event->getIdUser());
            $query->bindValue(':id_lieu', $event->getIdLieu());
            $query->execute();
        }
    
        public function deleteEvent($id)
        {
            $query = $this->connection->prepare("DELETE FROM events WHERE id = :id");
            $query->bindValue(':id', $id);
            $query->execute();
        }
    }
    
































// class EventsModel extends Model{

//     protected $table = "events";
//     protected $allowedColumns = [
//         "id",	
//         "nom",	
//         "artiste",	
//         "description",	
//         "dateEvents",	
//         "id_user",	
//         "id_lieu",	
//     ];


