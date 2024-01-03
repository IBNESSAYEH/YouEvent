<?php
namespace App\models;

use App\core\Database;


class AdministrateurModel extends Database
{
    public function getUers()
    {
        $con = $this->connect();
        $sql = $con->prepare("SELECT u.id, u.nom, u.prenom, u.email,  u.id_role, r.titre
        FROM users u
        JOIN roles r ON u.id_role = r.id");
        $sql->execute();
        $uers = $sql->fetchAll(PDO::FETCH_OBJ);
        $this->dbConn = null;
        return $uers;
    }
    public function getRoles()
    {
        $con = $this->connect();
        $sql = $con->prepare("SELECT `id`, `titre` FROM `roles`");
        $sql->execute();
        $roles = $sql->fetchAll(PDO::FETCH_OBJ);
        $this->dbConn = null;
        return $roles;
    }

    public function modifierRole(int $idU, int $idRole)
    {
        $con = $this->connect();
        $sql = $con->prepare("UPDATE `users` SET  `id_role`= :a WHERE  `id` = :b");
        $sql->bindParam(':b', $idU);
        $sql->bindParam(':a', $idRole);
        $sql->execute();
        $this->dbConn = null;
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
        $con = $this->connect();
        $sql = $con->prepare("SELECT `date_de_creation`, `prixTotal` FROM `reservation` WHERE 1");
        $sql->execute();
        $reservation = $sql->fetchAll(PDO::FETCH_ASSOC);
        $this->dbConn = null;
        return $reservation;
    }
}
?>