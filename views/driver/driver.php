<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="containter">
        <h1>Driver's page!</h1>
        </br>

        <?php
        if ($action == "getEmployee" && (!isset($employee) || !$employee || sizeof($employee) == 0)) {
            echo "<p>The employee does not exists!</p>";
        } else if (isset($error)) {
            echo "<p>$error</p>";
        }
        ?>
        <form class="mb-5 needs-validation" action="index.php?controller=driver&action=<?php echo isset($driver['id']) ? "updateDriver" : "createDriver" ?>" method="post">
            <input type="hidden" name="id" value="<?php echo isset($driver['id']) ? $driver['id'] : null ?>">
            <div class="form-row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required type="text" value="<?php echo isset($driver['name']) ? $driver['name'] : null ?>" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter name" required>
                    </div>

                </div>
              
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="licensePlate">License Plate</label>
                        <input type="text" value="<?php echo isset($driver['license_plate']) ? $driver['license_plate'] : null ?>" class="form-control" id="licensePlate" name="license_plate" aria-describedby="licensePlateHelp" placeholder="Enter License Plate">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="phoneNumber">PhoneNumber</label>
                        <input type="text" value="<?php echo isset($driver['phone_number']) ? $driver['phone_number'] : null ?>" class="form-control" id="phoneNumber" name="phone_number" aria-describedby="phoneNumberHelp" placeholder="Enter phoneNumber" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary"><?php echo isset($driver['id']) ? "Save Changes" : "Create" ?></button>
            <a id="return" class="btn btn-secondary" href="<?php echo "?controller=driver&action=getAllDrivers"; ?>">Return</a>
        </form>
    </div>
</body>

</html>