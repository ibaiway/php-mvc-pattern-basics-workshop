<?php

require_once MODELS . "clientModel.php";

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


function getAllClients()
{
    $drivers = get();
    if (isset($drivers)) {
        require_once VIEWS . "/driver/driverDashboard.php";
    } else {
        error("There is a database error, try again.");
    }
}

function getClient($request)
{
    //
}

function deleteClient($request)
{
    
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
