<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Cards</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add your custom styles here if needed */
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">

        <?php  foreach ($reservations as $event): ?>
        <?php if (strtotime(date("Y-m-d H:i:s")) < strtotime($event->dateEvents)){ ?>
            
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="https://les-seminaires.eu/wp-content/uploads/2019/04/organisation-evenement-grand-public.jpg" class="card-img-top" alt="Event Image">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($event->nom); ?></h5>
                        <p class="card-text"><?= htmlspecialchars($event->description); ?></p>
                        <p class="card-text"><?= htmlspecialchars($event->artiste); ?></p>
                        <p class="card-text"><?= htmlspecialchars($event->dateEvents); ?></p>
                        <p class="card-text">Reservation ID: <?= $event->reservation_id; ?></p>
                        <p class="card-text">Total Price: <?= $event->prixTotal; ?>$</p>
                        <p class="card-text">Reservation Date: <?= $event->date_de_creation; ?></p>
                    </div>
                </div>
            </div>
        <?php } else { ?>

            <div class="col-md-6 mb-4">
                <div class="card bg-dark">
                    <img src="https://les-seminaires.eu/wp-content/uploads/2019/04/organisation-evenement-grand-public.jpg" class="card-img-top" alt="Event Image">
                    <div class="card-body">
                        <h5 class="card-title text-light "><?= htmlspecialchars($event->nom); ?></h5>
                        <p class="card-text text-light "><?= htmlspecialchars($event->description); ?></p>
                        <p class="card-text text-light "><?= htmlspecialchars($event->artiste); ?></p>
                        <p class="card-text text-light "><?= htmlspecialchars($event->dateEvents); ?></p>
                        <p class="card-text text-light ">Reservation ID: <?= $event->reservation_id; ?></p>
                        <p class="card-text text-light ">Total Price: <?= $event->prixTotal; ?>$</p>
                        <p class="card-text text-light ">Reservation Date: <?= $event->date_de_creation; ?></p>
                    </div>
                </div>
            </div>

        <?php } ?>
        <?php endforeach; ?>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
