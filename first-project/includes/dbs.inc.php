<?php
    $dsn="mysql:host=localhost;dbname=mydb;"; // DSN -> Data Source Name
    $dbuser = "root";
    $dbpwd = "";

    try {
        $pdo = new PDO($dsn, $dbuser, $dbpwd); // PDO -> PHP Data Objects
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Database Connected successfully"; 
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }



?>