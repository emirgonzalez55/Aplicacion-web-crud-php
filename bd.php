<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $bd = 'bd';

    try {
        $conexion = new PDO("mysql:host=$server;dbname=$bd;", $username, $password);
    } catch (PDOException $error) {
      die('La onexion fallo: '.$error->getMessage());
    }


?>
