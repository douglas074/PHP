<?php

echo 'Conectado';
try {
    $root = 'root';
    $local = 'localhost';
    $pass = 'Cafezinho123!';
    $dbName = 'PerJobs';

    $conn = new PDO("mysql:host=localhost;dbname=PerJobs;$root, $pass");

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
