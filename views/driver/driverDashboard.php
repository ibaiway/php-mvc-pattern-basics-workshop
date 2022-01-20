<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <h1>Driver Dashboard page!</h1>
    <style type="text/css">

    </style>
    <?php 
    switch ($request["alert"]) {
        case 'success':
            if ($request["alertText"] == "saved") {
                $text = "Data saved successfully.";
            } elseif ($request["alertText"] == "created") {
                $text = "Data created successfully.";
            } elseif ($request["alertText"] == "deleted") {
                $text = "Data deleted successfully.";
            }
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                ' . $text . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            break;
        case 'fail':
            $text= "There was an error";
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                ' . $text . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            break;
            break;
        
        default:
            # code...
            break;
    }
    ?>
    <table class="table">
        <thead>
            <tr>
                <th class="tg-0pky">ID</th>
                <th class="tg-0pky">Name</th>
                <th class="tg-0lax">Phone Number</th>
                <th class="tg-0lax">License Plate</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($drivers as $index => $driver) {
                echo "<tr>";
                echo "<td class='tg-0lax'>" . $driver["id"] . "</td>";
                echo "<td class='tg-0lax'>" . $driver["name"] . "</td>";
                echo "<td class='tg-0lax'>" . $driver["phone_number"] . "</td>";
                echo "<td class='tg-0lax'>" . $driver["license_plate"] . "</td>";
                echo "<td colspan='2' class='tg-0lax'>
                <a class='btn btn-secondary' href='?controller=driver&action=getDriver&id=" . $driver["id"] . "'>Edit</a>
                <a class='btn btn-danger' href='?controller=driver&action=deleteDriver&id=" . $driver["id"] . "'>Delete</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a id="home" class="btn btn-primary" href="?controller=driver&action=createDriver">Create</a>
    <a id="home" class="btn btn-secondary" href="./">Back</a>
</body>
</html>