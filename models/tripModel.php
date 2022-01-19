<?php

require_once("helper/dbConnection.php");

function get(){
    $query = conn()->prepare("SELECT t.id, t.driver_id, t.client_id, t.length, t.date, d.name as driver_name, c.name as client_name
    FROM trips as t
    INNER JOIN drivers as d
        ON t.driver_id = d.id
    INNER JOIN clients as c
        ON t.client_id = c.id;");

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

function getByUser($id){
    $query = conn()->prepare("SELECT t.id, t.driver_id, t.client_id, t.length, t.date, d.name as driver_name, c.name as client_name
    FROM trips as t
    INNER JOIN drivers as d
        ON t.driver_id = d.id
    INNER JOIN clients as c
        ON t.client_id = c.id
    WHERE t.client_id = :id");

    $query->bindParam(":id", $id);

    try {
        $query->execute();
        $trips = $query->fetchAll();
        return $trips;
    } catch (PDOException $e) {
        return [];
    }
}