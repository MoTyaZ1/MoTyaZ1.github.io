<?php
$pdo = new PDO('mysql:host=localhost','root','');

$pdo->exec("CREATE DATABASE db01");