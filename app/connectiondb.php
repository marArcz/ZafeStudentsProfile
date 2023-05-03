<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "students";

    $dsn = "mysql:host=$host;dbname=$db";

    try {
        $pdo = new PDO($dsn, $user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        die($e->getMessage());
    }
?>