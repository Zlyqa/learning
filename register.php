<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<h3>Регистрация</h3>
<body>
    <form action="index.php" method="post">
        <label>Email:<br>
            <input type="text" name="Email" required><br>
        </label>
        <label>Логин:<br>
            <input type="text" name="login" required><br>
        </label>
        <label>Пароль:<br>
            <input type="password" name="password" required><br>
        </label>
        <label>Повторите пароль:<br>
            <input type="password" name="password2" required><br>
        </label>
        <input type="submit" value="Зарегистрироваться">
    </form>
    <p>
        <a href="auth.php">Авторизоваться</a>
    </p>
</body>
</html>
