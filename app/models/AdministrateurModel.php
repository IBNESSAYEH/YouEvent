<?php

namespace App\models;

use App\core\Database;
use PDO;


trait AdministrateurModel 
{
    use Database;
    private $connection;
    private $id;
    private $nom;
    private $prenom;
    private  $email;
    private $id_role;
    private $titre;
 
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getIdRole() {
        return $this->id_role;
    }

    public function setIdRole($id_role) {
        $this->id_role = $id_role;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }


    public function __construct()
    {
        $this->connection = $this->connect();
    }
    public function getUers()
    {
        
        $sql =  $this->connection->prepare("SELECT u.id, u.nom, u.prenom, u.email,  u.id_role, r.titre
        FROM users u
        JOIN roles r ON u.id_role = r.id");
        $sql->execute();
        $uers = $sql->fetchAll(PDO::FETCH_OBJ);
        return $uers;
    }
    public function getRoles()
    {
        $sql = $this->connection->prepare("SELECT `id`, `titre` FROM `roles`");
        $sql->execute();
        $roles = $sql->fetchAll(PDO::FETCH_OBJ);
        return $roles;
    }

    public function modifierRole()
    {
        $id =  $this->getId();
        $idRole = $this->getIdRole();
        $sql = $this->connection->prepare("UPDATE `users` SET  `id_role`= :a WHERE  `id` = :b");
        $sql->bindParam(':b',$id);
        $sql->bindParam(':a',$idRole );
        $sql->execute();
    }

    //     public function supprimerUer(int $idU)
    //     {
    //         $con = $this->connect();
    //         $sql = $con->prepare("DELETE users, reservation, recu, ticket, events
    //         FROM users
    //         JOIN reservation ON users.id = reservation.id_user
    //         JOIN recu ON reservation.id = recu.id_reservation
    //         JOIN ticket ON recu.id_ticket = ticket.id
    //         JOIN events ON ticket.id_event = events.id
    //         WHERE users.id = :a ;");
    //         $sql->bindParam(':a', $idU);
    //         $sql->execute();
    //         $this->dbConn = null;
    //     }
    //     }

    // Connect to the database and execute the query




    // Fetch the results and output them as JSON



    public function getReservation()
    {
        $sql = $this->connection->prepare("SELECT `date_de_creation`, `prixTotal` FROM `reservation` WHERE 1");
        $sql->execute();
        $reservation = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $reservation;
    }
}
?>