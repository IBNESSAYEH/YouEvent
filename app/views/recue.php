<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipts By Date</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .receipt-container {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .receipt-details {
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

        .event-date {
            color: #28a745;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .receipt-container:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">

        <?php foreach ($recue as $receipt): ?>
        
        <?php if (strtotime(date("Y-m-d H:i:s")) < strtotime($receipt->event_date)){ ?>
            <div class="col-md-6 mb-4">
                <div class="receipt-container">
                    <div class="receipt-details">
                        <h5 class="event-title"><?= htmlspecialchars($receipt->event_name); ?></h5>
                        <p class="event-description"><?= htmlspecialchars($receipt->description); ?></p>
                        <p class="event-info"><?= htmlspecialchars($receipt->artiste); ?></p>
                        <p class="event-date"><?= date('F j, Y, g:i a', strtotime($receipt->event_date)); ?></p>
                        <p class="event-info">Reservation ID: <?= $receipt->id_reservation; ?></p>
                        <p class="event-info">Ticket ID: <?= $receipt->id_ticket; ?></p>
                    </div>
                </div>
            </div>
            <?php } else { ?>

                <div class="col-md-6 mb-4">
                <div class="receipt-container">
                    <div class="receipt-details bg-dark">
                        <h5 class="event-title"><?= htmlspecialchars($receipt->event_name); ?></h5>
                        <p class="event-description"><?= htmlspecialchars($receipt->description); ?></p>
                        <p class="event-info"><?= htmlspecialchars($receipt->artiste); ?></p>
                        <p class="event-date"><?= date('F j, Y, g:i a', strtotime($receipt->event_date)); ?></p>
                        <p class="event-info">Reservation ID: <?= $receipt->id_reservation; ?></p>
                        <p class="event-info">Ticket ID: <?= $receipt->id_ticket; ?></p>
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
