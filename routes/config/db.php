<?php
if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['SERVER_NAME'] == 'localhost') {
    // Local environment
    $db_host = '127.0.0.1';
    $db_user = 'root';
    $db_password = '123456';
    $db_name = 'finzor';
} else {
    // Live environment
    $db_host = '';  
    $db_user = '';
    $db_password = '';
    $db_name = '';
}


try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
