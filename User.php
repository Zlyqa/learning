<?php
/**
 * Класс для управления пользователями системы
 */
class User
{
    /**
     * Создание нового пользователя в системе
     * @param array $userData - массив с данными пользователя
     * @return bool
     */
    public function createUser(array $userData)
    {
        // Реализовать создание нового пользователя
        $password = $userData['password'];
        $login = $userData['login'];
        echo "Пользователь создан <br>Логин: $login <br>Пароль: $password";
    }

    /**
     * Авторизация пользователя
     * @param string $username - имя пользователя
     * @param string $password - пароль пользователя
     * @return bool
     */
    public function authenticateUser($username, $password)
    {
        // Реализовать проверку данных пользователя
    }

    /**
     * Получить информацию о пользователе по его ID
     * @param int $userId - ID пользователя
     * @return array|null
     */
    public function getUserById($userId)
    {
        // Реализовать получение пользователя из базы данных по ID
    }

    /**
     * Удаление пользователя по его ID
     * @param int $userId - ID пользователя
     * @return bool
     */
    public function deleteUser($userId)
    {
        // Реализовать удаление пользователя
    }
}
