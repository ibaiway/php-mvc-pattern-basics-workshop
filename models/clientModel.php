<?php

require_once("helper/dbConnection.php");

function get(){
    $query = conn()->prepare("SELECT * FROM clients");

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