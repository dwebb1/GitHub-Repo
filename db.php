<?php
$servername = "172.30.197.234";
$username = "user6G8";
$password = "WBFovxEkJOBIdwPc";

try {
    $conn = new PDO("mysql:host=$servername;dbname=wpdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>