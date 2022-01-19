<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <h1>Trip Dashboard page!</h1>
    <style type="text/css">

    </style>
    <table class="table">
        <thead>
            <tr>
                <th class="tg-0pky">ID</th>
                <th class="tg-0pky">Driver ID</th>
                <th class="tg-0lax">Client ID</th>
                <th class="tg-0lax">Length</th>
                <th class="tg-0lax">Date</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($trips as $index => $trip) {
                echo "<tr>";
                echo "<td class='tg-0lax'>" . $trip["id"] . "</td>";
                echo "<td class='tg-0lax'>" . $trip["driver_id"] . "</td>";
                echo "<td class='tg-0lax'>" . $trip["client_id"] . "</td>";
                echo "<td class='tg-0lax'>" . $trip["length"] . "</td>";
                echo "<td class='tg-0lax'>" . $trip["date"] . "</td>";
                echo "<td colspan='2' class='tg-0lax'>
                <a class='btn btn-secondary' href='?controller=trip&action=getTrip&id=" . $trip["id"] . "'>Edit</a>
                <a class='btn btn-danger' href='?controller=trip&action=deleteTrip&id=" . $trip["id"] . "'>Delete</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a id="home" class="btn btn-primary" href="?controller=trip&action=createTrip">Create</a>
    <a id="home" class="btn btn-secondary" href="./">Back</a>
</body>
</html>