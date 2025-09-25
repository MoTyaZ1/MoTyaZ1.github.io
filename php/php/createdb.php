<?php
$conn = new PDO('mysql:host=localhost', 'root', '');

$conn -> exec('create database motyaz_database');
header("Location: ../index.html");