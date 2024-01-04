<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .event-container {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .event-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .event-details {
            padding: 20px;
        }

        .event-title {
            color: #007bff;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .event-description {
            color: #6c757d;
            margin-bottom: 10px;
        }

        .event-info {
            color: #6c757d;
            margin-bottom: 10px;
        }

        .event-buttons a {
            margin-right: 10px;
        }

        .event-buttons a.btn {
            color: #fff;
        }

        .event-buttons a.btn-primary {
            background-color: #007bff;
        }

        .event-buttons a.btn-success {
            background-color: #28a745;
        }

        .event-container:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-4">
            <div class="event-container">
                <img src="https://les-seminaires.eu/wp-content/uploads/2019/04/organisation-evenement-grand-public.jpg" class="event-image" alt="Event Image">
            </div>
        </div>
        <div class="col-md-8 mb-4">
            <div class="event-container">
                <div class="event-details">
                    <h5 class="event-title"><?= htmlspecialchars($event->nom); ?></h5>
                    <p class="event-description"><?= htmlspecialchars($event->description); ?></p>
                    <p class="event-info"><?= htmlspecialchars($event->artiste); ?></p>
                    <p class="event-info"><?= htmlspecialchars($event->dateEvents); ?></p>

                    <!-- Form for reservation -->
                    <form id="reservationForm" action="<?= ROOT ?>reservation/reserver/<?= 1 ?>/<?= $event->id ?>/1" method="post">
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1" required>
                        </div>
                        <button type="submit" class="btn btn-success">Reserver</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Update the form action dynamically based on user input
    document.getElementById('quantity').addEventListener('input', function() {
        var quantity = this.value;
        document.getElementById('reservationForm').action = `<?= ROOT ?>reservation/reserver/1/<?= $event->id ?>/${quantity}`;
    });
</script>

</body>
</html>
