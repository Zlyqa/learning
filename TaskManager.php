<?php
/**
 * Класс для управления задачами
 */
class TaskManager
{
    /**
     * Создание новой задачи
     * @param array $taskData - массив с данными задачи
     * @return bool
     */
    public function createTask(array $taskData)
    {
        // Реализовать создание новой задачи
    }

    /**
     * Получить задачу по её ID
     * @param int $taskId - ID задачи
     * @return array|null
     */
    public function getTaskById($taskId)
    {
        // Реализовать получение задачи из базы данных по ID
    }

    /**
     * Обновить статус задачи
     * @param int $taskId - ID задачи
     * @param string $status - новый статус задачи
     * @return bool
     */
    public function updateTaskStatus($taskId, $status)
    {
        // Реализовать изменение статуса задачи
    }

    /**
     * Удалить задачу по её ID
     * @param int $taskId - ID задачи
     * @return bool
     */
    public function deleteTask($taskId)
    {
        // Реализовать удаление задачи
    }

    /**
     * Получить все задачи пользователя
     * @param int $userId - ID пользователя
     * @return array
     */
    public function getTasksByUserId($userId)
    {
        // Реализовать получение всех задач для пользователя
    }
}
