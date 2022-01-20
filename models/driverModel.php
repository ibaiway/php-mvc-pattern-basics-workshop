<?php

require_once("helper/dbConnection.php");

function get(){
    $query = conn()->prepare("SELECT * FROM drivers");

    try {
        $query->execute();
        $drivers = $query->fetchAll();
        return $drivers;
    } catch (PDOException $e) {
        return [];
    }
}

function getById($id){
    $query = conn()->prepare("SELECT * FROM drivers WHERE id = :id");
    $query->bindParam(":id", $id);

    try {
        $query->execute();
        $driver = $query->fetch();
        return $driver;
    } catch (PDOException $e) {
        return [];
    }
}

function update($driver){
    $query = conn()->prepare("UPDATE drivers SET name = :name, phone_number = :phone_number, license_plate = :license_plate WHERE id = :id;");

    $query->bindParam(":name", $driver["name"]);
    $query->bindParam(":phone_number", $driver["phone_number"]);
    $query->bindParam(":license_plate", $driver["license_plate"]);
    $query->bindParam(":id", $driver["id"]);

    try {
        $query->execute();
        return [true];
    } catch (PDOException $e) {
        return [false, $e];
    }
}

function create($driver){
    $query = conn()->prepare("INSERT INTO drivers (name, phone_number, license_plate) VALUES (:name, :phone_number, :license_plate)");

    $query->bindParam(":name", $driver["name"]);
    $query->bindParam(":phone_number", $driver["phone_number"]);
    $query->bindParam(":license_plate", $driver["license_plate"]);

    try {
        $query->execute();
        return [true];
    } catch (PDOException $e) {
        return [false, $e];
    }
}

function delete($id){
    $query = conn()->prepare("DELETE FROM drivers WHERE id = :id;");

    $query->bindParam(":id", $id);

    try {
        $query->execute();
        return [true];
    } catch (PDOException $e) {
        return [false, $e];
    }
}