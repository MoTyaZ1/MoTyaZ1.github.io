<?php
session_start();
if (isset($_SESSION["email"])){
echo "Вы вошли как ".$_SESSION["email"];
} else {
    echo "вход не выполнен";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="db.php" method="get">
        <input type="email" placeholder='email' name='email'>
        <input type="text" placeholder='pass' name='pass'>
        <input type="submit">
    </form>
    <form action="createdb.php">
        <input type="submit" value="Создать БазуДанных">
    </form>
    <form action="createtable.php">
        <input type="submit" value="Создать Таблицу">
    </form>
        <form action="auth.php">
        <input type="email" placeholder='email' name='email'>
        <input type="text" placeholder='pass' name='pass'>
        <input type="submit" value="Войти">
    </form>
        </form>
        <form action="out.php">
        <input type="submit" value="Выйти">
    </form>
</body>
</html