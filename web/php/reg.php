<?php
$conn = new PDO('mysql:host=localhost;dbname=motyaz_database', 'root', '');

$email = $_GET['email'];
$pass = $_GET['pass'];
/* echo $email.$pass */

$conn -> exec("INSERT INTO users (email,pass) values ('$email','$pass')");
?>