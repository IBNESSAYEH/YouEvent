

    <!-- Events Section -->
    <!-- Events Section -->
<!-- Events Section -->
<section class="container my-5">
    <h2 class="text-center mb-4">Upcoming Events</h2>
    <div class="row">
        <?php foreach ($events as $event): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://les-seminaires.eu/wp-content/uploads/2019/04/organisation-evenement-grand-public.jpg" class="card-img-top" alt="Event Image">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($event->nom); ?></h5>
                        <!-- <p class="card-text"><?= htmlspecialchars($event->description); ?></p>
                        <p class="card-text"><?= htmlspecialchars($event->artiste); ?></p> -->
                        <p class="card-text"><?= htmlspecialchars($event->dateEvents); ?></p>
                        <a href="<?= ROOT ?>home/detail/<?= $event->id ?>" class="btn btn-primary">details</a>
                        <a href="<?= ROOT ?>reservation/reserver/<?= $event->id ?>" class="btn btn-success">reserver</a>
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
