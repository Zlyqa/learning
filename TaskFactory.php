<?php
require_once 'TaskInterface.php';
//  Фабрика для создания задач

class TaskFactory
{
    /**
     * Метод для создания задачи в зависимости от типа
     * 
     * @param string $type Тип задачи
     * @param string $title Название задачи
     * @param string $description Описание задачи
     * @param string|null $extra Дополнительный параметр (например, due date или приоритет)
     * @return TaskInterface
     */
    public static function createTask(string $type, string $title, string $description, ?string $extra = null): TaskInterface
    {
        switch (strtolower($type)) {
            case 'basic':
                return new BasicTask($title, $description);
            case 'reminder':
                if (empty($extra)) {
                    throw new InvalidArgumentException('Для задачи с напоминанием требуется указать дату выполнения.');
                }
                return new ReminderTask($title, $description, $extra);
            case 'priority':
                if (empty($extra)) {
                    throw new InvalidArgumentException('Для задачи с приоритетом требуется указать приоритет.');
                }
                return new PriorityTask($title, $description, $extra);
            default:
                throw new InvalidArgumentException('Неизвестный тип задачи: ' . $type);
        }
    }
}
