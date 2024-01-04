<?php

namespace App\models;

use App\core\Database;
use PDO;

trait RecueModel
{
    use Database;

    private $connection;
    private $id;
    private $reservationId;
    private $ticketId;
    private $event_name;
    private $artiste;
    private $description;
    private $event_date;

    public function __construct()
    {
        $this->connection = $this->connect();
    }

    // Getters and Setters for properties

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getReservationId()
    {
        return $this->reservationId;
    }

    public function setReservationId($reservationId)
    {
        $this->reservationId = $reservationId;
    }

    public function getTicketId()
    {
        return $this->ticketId;
    }

    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
    }

    public function getEventName()
    {
        return $this->event_name;
    }

    public function setEventName($event_name)
    {
        $this->event_name = $event_name;
    }

    public function getArtiste()
    {
        return $this->artiste;
    }

    public function setArtiste($artiste)
    {
        $this->artiste = $artiste;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getEventDate()
    {
        return $this->event_date;
    }

    public function setEventDate($event_date)
    {
        $this->event_date = $event_date;
    }

    // Method to get receipt details by user ID
    public function getRecue($userId)
    {
        $query = $this->connection->prepare(
            "SELECT recu.*, e.nom AS event_name, e.artiste, e.description, e.dateEvents AS event_date
            FROM recu
            JOIN reservation ON recu.id_reservation = reservation.id
            JOIN ticket ON recu.id_ticket = ticket.id
            JOIN events AS e ON ticket.id_event = e.id
            WHERE reservation.id_user = :userId"
        );
        $query->bindValue(':userId', $userId, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);

        return !empty($result) ? $result : false;
    }

    // You can add other receipt-related methods as needed
}
