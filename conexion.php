<?php
    $server = 'localhost';
    $username ='root';
    $password = '';
    $database = 'taller';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    } catch (PDOException $e) {
      die('conexion fallida: '. $e->getMessage());
    }
?>    