<?php

require_once("helper/dbConnection.php");

function get(){
    $query = conn()->prepare("SELECT c.id, c.name, c.email , COUNT(t.client_id) as trip_count
    FROM clients c
    LEFT JOIN trips t 
    ON c.id = t.client_id 
    GROUP BY c.id;");

    try {
        $query->execute();
        $clients = $query->fetchAll();
        return $clients;
    } catch (PDOException $e) {
        return [];
    }
}

function getById($id){
}