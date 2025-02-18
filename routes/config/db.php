<?php
require_once __DIR__ . '/constant.php';

if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['SERVER_NAME'] == 'localhost') {
    // Local environment
    $db_host = getenv('LOCAL_DB_HOST');
    $db_user = getenv('LOCAL_DB_USER');
    $db_password = getenv('LOCAL_DB_PASS');
    $db_name = getenv('LOCAL_DB_NAME');
} else {
    // Live environment
    $db_host = getenv('LIVE_DB_HOST');
    $db_user = getenv('LIVE_DB_USER');
    $db_password = getenv('LIVE_DB_PASS');
    $db_name = getenv('LIVE_DB_NAME');
}


try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_GET['debug'])){
        echo "Database connected successfully (Host: ".$db_host.")";
    }
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
