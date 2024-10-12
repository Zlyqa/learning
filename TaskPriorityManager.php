<?php
/**
 * Класс для управления приоритетами задач
 */
class TaskPriorityManager
{
    /**
     * Установить приоритет для задачи
     * @param int $taskId - ID задачи
     * @param string $priority - приоритет задачи (например: высокий, средний, низкий)
     * @return bool
     */
    public function setTaskPriority($taskId, $priority)
    {
        // Реализовать установку приоритета задачи
    }

    /**
     * Получить приоритет задачи
     * @param int $taskId - ID задачи
     * @return string
     */
    public function getTaskPriority($taskId)
    {
        // Реализовать получение приоритета задачи
    }
}
