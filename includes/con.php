<?php
// Database connection placeholder for future MySQL integration.
// Update credentials when ready to connect to a real database.
$host = 'localhost';
$db   = 'rza';
$user = 'rza_user';
$pass = 'secret';
$dsn  = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    // In production, log this to a file instead of displaying.
    // For the prototype we keep it simple.
    // echo 'Connection failed: ' . $e->getMessage();
}
