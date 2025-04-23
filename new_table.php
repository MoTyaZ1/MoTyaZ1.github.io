<?php
$pdo = new PDO('mysql:host=localhost;dbname=db01','root','');

$pdo->exec("CREATE TABLE users (
            id INT,
            login VARCHAR(50),
            pass VARCHAR(50))");
?>