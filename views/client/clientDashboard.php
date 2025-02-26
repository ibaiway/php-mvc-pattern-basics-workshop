<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <h1>Client Dashboard page!</h1>
    <style type="text/css">

    </style>
    <table class="table">
        <thead>
            <tr>
                <th class="tg-0pky">ID</th>
                <th class="tg-0pky">Name</th>
                <th class="tg-0lax">email</th>
                <th class="tg-0lax">Trips made</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($clients as $index => $client) {
                echo "<tr>";
                echo "<td class='tg-0lax'>" . $client["id"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["name"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["email"] . "</td>";
                echo "<td class='tg-0lax'><a href='?controller=trip&action=getAllTripsByUser&id=" . $client["id"] . "'>" . $client["trip_count"] . "</td>";
                echo "<td colspan='2' class='tg-0lax'>
                <a class='btn btn-secondary' href='?controller=client&action=getClient&id=" . $client["id"] . "'>Edit</a>
                <a class='btn btn-danger' href='?controller=client&action=deleteClient&id=" . $client["id"] . "'>Delete</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a id="home" class="btn btn-primary" href="?controller=client&action=createClient">Create</a>
    <a id="home" class="btn btn-secondary" href="./">Back</a>
</body>
</html>