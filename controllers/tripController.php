<?php

require_once MODELS . "tripModel.php";

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

function getAllTrips()
{
    $trips = get();
    if (isset($trips)) {
        require_once VIEWS . "/trip/tripDashboard.php";
    } else {
        error("There is a database error, try again.");
    }
}

function getTrip($request)
{
    //
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
