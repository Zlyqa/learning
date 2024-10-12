<?php
require_once 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = htmlspecialchars($_POST["login"], ENT_QUOTES);
    $password = htmlspecialchars($_POST["password"], ENT_QUOTES);
    if (array_key_exists("password2", $_POST)) {
        $email = htmlspecialchars($_POST["Email"], ENT_QUOTES);
        $password2 = htmlspecialchars($_POST["password2"], ENT_QUOTES);
        if ($password2 == $password) {
            $userManager = new User();
            $userManager->createUser(["email" => $email, "login" => $login, "password" => $password]);
        } else {
            echo "Пароли не совпадают";
        }
    } else {
        echo "Пользователь авторизован <br>Логин: $login <br>Пароль: $password";
    }
}
