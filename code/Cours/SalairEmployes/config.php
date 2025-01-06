<?php

$host = '127.0.0.1';    
$dbname = 'appdb';  
$username = 'root';     
$password = 'root';         

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
    die();
}
?>
