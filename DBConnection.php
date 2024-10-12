<?php
/**
 * Класс для создания подключения к базе данных
 */
final class DBConnection
{
    /**
     * Подключение к базе данных и возврат экземпляра объекта \PDO
     * @return \PDO
     * @throws \Exception
     */
    public function connect()
    {
        // Реализовать подключение к базе данных
    }

    /**
     * Возврат экземпляра объекта DBConnection
     * @return DBConnection
     */
    public static function get()
    {
        // Реализовать паттерн Singleton для одного подключения
    }

    protected function __construct()
    {
        // Защищённый конструктор для предотвращения создания экземпляра напрямую
    }
}
