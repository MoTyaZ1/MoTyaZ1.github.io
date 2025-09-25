<?php

$conn = new PDO('mysql:host=localhost;dbname=motyaz_database', 'root', '');
$CPU = $_GET['CPU'];
$GPU = $_GET['GPU'];
$MotherBoard = $_GET['MotherBoard'];
$RAM = $_GET['RAM'];
$Storage = $_GET['Storage'];
$Price = $_GET['Price'];
if ($CPU && $GPU && $MotherBoard && $RAM && $Storage && $Price){
    $conn -> exec("INSERT INTO computers (CPU,GPU,MotherBoard,RAM,Storage,Price) values ('$CPU','$GPU','$MotherBoard','$RAM','$Storage','$Price')");
    header("Location: ../index.html");
} else {
    echo "Ошибка - Заполните все поля";
}