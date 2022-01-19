<?php

require_once("helper/dbConnection.php");

function get(){
    $query = conn()->prepare("SELECT * FROM trips");

    try {
        $query->execute();
        $trips = $query->fetchAll();
        return $trips;
    } catch (PDOException $e) {
        return [];
    }
}

function getById($id){
}