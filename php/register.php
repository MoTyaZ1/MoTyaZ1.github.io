<?php
    require_once('db.php');
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "INSERT INTO `database` (email,pass) VALUES ('$email', '$pass')";

$conn -> query($sql);