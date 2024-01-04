<?php

namespace App\models;

use App\core\Database;
use PDO;

trait ReservationModel
{
    use Database;
    private $connection;
    private $id;
    private $date_de_creation;
    private $prixTotal;
    private $id_user;
    private $id_event;
    private $qte;

    /**
     * @return mixed
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * @param mixed $qte
     */
    public function setQte($qte)
    {
        $this->qte = $qte;
    }

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
    public function getDateDeCreation()
    {
        return $this->date_de_creation;
    }

    /**
     * @param mixed $date_de_creation
     */
    public function setDateDeCreation($date_de_creation)
    {
        $this->date_de_creation = $date_de_creation;
    }

    /**
     * @return mixed
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }

    /**
     * @param mixed $prixTotal
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;
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
    public function getIdEvent()
    {
        return $this->id_event;
    }

    /**
     * @param mixed $id_event
     */
    public function setIdEvent($id_event)
    {
        $this->id_event = $id_event;
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

    public function createEvent()
    {
       
        $query = $this->connection->prepare("INSERT INTO `reservation`(`date_de_creation`, `prixTotal`, `id_user`, `id_event`, `qte`) 
                                            VALUES(:date_de_creation, :prixTotal, :id_user, :id_event, :qte)");
        $query->bindValue(':date_de_creation', $this->getDateDeCreation());
        $query->bindValue(':prixTotal', $this->getPrixTotal());
        $query->bindValue(':id_user', $this->getIdUser());
        $query->bindValue(':id_event', $this->getIdEvent());
        $query->bindValue(':qte', $this->getQte());
        $query->execute();
    }

    public function getEventById($id)
    {
        $query = $this->connection->prepare("SELECT e.*, r.id AS reservation_id, r.prixTotal, r.date_de_creation, r.id_user AS reservation_user_id
                                            FROM events AS e
                                            LEFT JOIN reservation AS r ON e.id = r.id_event
                                            WHERE r.id_user = :id");
        $query->bindValue(':id', $id);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);

        return !empty($result) ? $result : false;
    }
    public function getAllReservations()
{
    $query = $this->connection->prepare("SELECT e.*, r.id AS reservation_id, r.prixTotal, r.date_de_creation, r.id_user AS reservation_user_id
                                        FROM events AS e
                                        LEFT JOIN reservation AS r ON e.id = r.id_event");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_OBJ);

    return !empty($result) ? $result : false;
}


    public function updateEvent()
    {
        $query = $this->connection->prepare("UPDATE events SET nom = :nom, artiste = :artiste, description = :description, 
                                            dateEvents = :dateEvents, id_user = :id_user, id_lieu = :id_lieu WHERE id = :id");
        $query->bindValue(':id', $this->getId());
        $query->bindValue(':nom', $this->getNom());
        $query->bindValue(':artiste', $this->getArtiste());
        $query->bindValue(':description', $this->getDescription());
        $query->bindValue(':dateEvents', $this->getDateEvents());
        $query->bindValue(':id_user', $this->getIdUser());
        $query->bindValue(':id_lieu', $this->getIdLieu());
        $query->execute();
    }

    public function deleteEvent($id)
    {
        $query = $this->connection->prepare("DELETE FROM events WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();
    }
}
