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
                    <a class="nav-link" href="#">Panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/reservation">Reservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">DashboardOrg</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">DashboardAdmin</a>
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

    <!-- Events Section -->
    <!-- Events Section -->
<!-- Events Section -->
<section class="container my-5">
    <h2 class="text-center mb-4">Upcoming Events</h2>
    <div class="row">
        <?php foreach ($events as $event): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Event Image">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($event->nom); ?></h5>
                        <p class="card-text"><?= htmlspecialchars($event->description); ?></p>
                        <p class="card-text"><?= htmlspecialchars($event->artiste); ?></p>
                        <p class="card-text"><?= htmlspecialchars($event->dateEvents); ?></p>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>



    <!-- About Section -->
    <section class="container my-5">
        <h2 class="text-center mb-4">About YouEvent</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod libero et enim venenatis, in
            bibendum lorem fermentum. Proin quis justo nec nulla tincidunt dapibus. Nullam auctor urna vel libero
            congue, nec luctus odio ultrices.</p>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 YouEvent. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
