<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$db_name = "finzor";


try {
    $pdo = new PDO("mysql:host=$servername;dbname=$db_name;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
