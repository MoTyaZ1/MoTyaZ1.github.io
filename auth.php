<?php
session_start();

$conn = new PDO('mysql:host=localhost;dbname=motyaz_database', 'root', '');

$email = $_GET['email'];
$pass = $_GET['pass'];
$result = $conn -> query("SELECT * from users WHERE email = '$email' and pass = '$pass'");

if ($result -> fetchAll()){
    $_SESSION["email"] = $email;
    header ("Location: index.php");
} else {
    session_destroy();
    header ("Location: index.php");
}
?>