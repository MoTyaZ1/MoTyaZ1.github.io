<?php

$conn = new PDO('mysql:host=localhost;dbname=motyaz_database', 'root', '');

$conn->exec("CREATE TABLE computers (
                    id integer auto_increment primary key, 
                    CPU varchar(100), 
                    GPU varchar(100),
                    MotherBoard varchar(100),
                    RAM varchar(100),
                    Storage varchar(100),
                    Price varchar(100))");
header("Location: ../index.html");