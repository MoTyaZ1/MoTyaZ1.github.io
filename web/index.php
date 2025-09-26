<?php
session_start();
if (isset($_SESSION["email"])) {
    echo "Вы вошли как " . $_SESSION["email"];
} else {
    echo "вход не выполнен";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/indexphp.css">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="php/db.php" method="get">
            <input type="text" placeholder='Процессор' name='CPU'>
            <input type="text" placeholder='Видиокарта' name='GPU'>
            <input type="text" placeholder='Материнская плата' name='MotherBoard'>
            <input type="text" placeholder='Оперативная память' name='RAM'>
            <input type="text" placeholder='Накопитель' name='Storage'>
            <input type="text" placeholder='Цена' name='Price'>
            <input type="submit">
        </form>
    </div>
    <div>
        <form action="php/createdb.php">
            <input type="submit" value="Создать Базу Данных">
        </form>
        <form action="php/createtable.php">
            <input type="submit" value="Создать Таблицу">
        </form>
        </div>
        <div>
        <form action="php/auth.php">
            <input type="email" placeholder='Почта' name='email'>
            <input type="text" placeholder='Пароль' name='pass'>
            <input type="submit" value="Войти">
        </form>
        </div>
        <div>
        <form action="php/reg.php" method="get">
            <input type="email" placeholder='Почта' name='email'>
            <input type="text" placeholder='Пароль' name='pass'>
            <input type="submit" value="Зарегестрироваться">
        </form>
        </div>
        <div>
        <form action="php/out.php">
            <input type="submit" value="Выйти">
        </form>
        </div>
</body>

</html