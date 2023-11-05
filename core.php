<?php

// Podešavanje parametara za povezivanje na bazu podataka
$host = "localhost";
$username = "root";
$password = "9bIkzN14"; 
$database = "HealthAlert";

try {

    error_reporting(0);
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'utf8'");
    
} catch (PDOException $e) {
    die("Greška pri povezivanju na bazu podataka: " . $e->getMessage());
}

?>