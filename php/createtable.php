<?php

$conn = new PDO('mysql:host=localhost;dbname=motyaz_database', 'root', '');

$conn->exec("CREATE TABLE users (
                    id integer auto_increment primary key, 
                    email varchar(50), 
                    pass varchar(50))");