<?php

require_once("helper/dbConnection.php");

function get(){
    $query = conn()->prepare(("SELECT * FROM drivers"));

    try {
        $query->execute();
        $drivers = $query->fetchAll();
        return $drivers;
    } catch (PDOException $e) {
        return [];
    }
}

function getById($id){
}