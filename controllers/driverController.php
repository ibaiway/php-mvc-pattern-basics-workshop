<?php

require_once MODELS . "driverModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic

$action = "";

if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
}

if (function_exists($action)) {
    call_user_func($action, $_REQUEST);
} else {
    error("Invalid user action");
}


/* ~~~ CONTROLLER FUNCTIONS ~~~ */

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllDrivers($request)
{
    $drivers = get();
    if (isset($drivers)) {
        require_once VIEWS . "/driver/driverDashboard.php";
    } else {
        error("There is a database error, try again.");
    }
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getDriver($request)
{
    $driver = getById($request["id"]);
    if (isset($driver)) {
        require_once VIEWS . "/driver/driver.php";
    } else {
        error("There is a database error, try again");
    }
}

function updateDriver($request)
{
    $driver = update($_POST);

    if ($driver[0]) {
        header("location: index.php?controller=driver&action=getAllDrivers&alert=success&n&alertText=saved");
    } else {
        $driver = $_POST;
        require_once VIEWS . "/driver/driver.php";
    }
}

function createDriver($request)
{
    if (sizeof($_POST) > 0) {
        $driver = create($_POST);

        if ($driver[0]) {
            header("Location: index.php?controller=driver&action=getAllDrivers&alert=success&n&alertText=created");
        } else {
            header("Location: index.php?controller=driver&action=getAllDrivers&alert=fail&n&alertText=created");
        }
    } else {
        require_once VIEWS . "/driver/driver.php";
    }
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
