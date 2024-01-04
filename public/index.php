

<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/core/config.php';

use App\core\App;

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>YouEvent</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">YouEvent</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>">home</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>recue/mesRecue/1">Reçue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>reservation">Reservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>organisateur">Dashboard Organisateur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>administrateur">DashboardAdmin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign In</a>
                </li>
            </ul>
        </div>
    </nav>



    <?php
    
App::loadController();



