<?php
session_start();

// Обработка формы входа
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Здесь должна быть проверка логина и пароля в базе данных
    // Это упрощенный пример для демонстрации

    if (!empty($username) && !empty($password)) {
        $_SESSION['message'] = "Добро пожаловать, $username!";
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $error = "Пожалуйста, заполните все поля";
    }
}

// Обработка перехода на страницу регистрации
if (isset($_GET['register'])) {
    // Здесь можно реализовать переход на страницу регистрации
    // или показать форму регистрации
    echo "Страница регистрации будет реализована здесь";
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма входа</title>
</head>

<body>
    <div class="login-form">
        <h2 style="text-align: center; margin-bottom: 30px;">Вход в систему</h2>

        <?php if (isset($error)): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="success"><?php echo htmlspecialchars($_SESSION['message']); ?></div>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Логин:</label>
                <input type="text" id="username" name="username" required
                    placeholder="Введите ваш логин">
            </div>

            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required
                    placeholder="Введите ваш пароль">
            </div>

            <button type="submit" name="login" class="btn">Войти</button>
        </form>

        <div class="register-link">
            <p>Нет аккаунта? <a href="?register=true">Зарегистрироваться</a></p>
        </div>
    </div>
</body>

</html>