<?php
// Arxiu amb la connexió a la base de dades
try {
    $conn = new PDO("mysql:host=localhost;dbname=dbdwes", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

session_start();
