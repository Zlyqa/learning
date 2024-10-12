<?php
// require_once 'User.php';
require_once 'TaskFactory.php';

// Создание обычной задачи
$basicTask = TaskFactory::createTask('basic', 'Купить хлеб', 'Необходимо купить хлеб до вечера');

// Создание задачи с напоминанием
$reminderTask = TaskFactory::createTask('reminder', 'Дейли', 'Ежедневное напоминание', '2024-10-15 10:00');

// Создание задачи с приоритетом
$priorityTask = TaskFactory::createTask('priority', 'Закончить отчет', 'Отчет должен быть готов к концу недели', 'High');

// Вывод информации о задачах
echo "Задача: {$basicTask->getTitle()}, Тип: {$basicTask->getType()}, Приоритет: {$basicTask->getPriority()}\n";
echo "Задача: {$reminderTask->getTitle()}, Тип: {$reminderTask->getType()}, Напоминание: {$reminderTask->getDate()}\n";
echo "Задача: {$priorityTask->getTitle()}, Тип: {$priorityTask->getType()}, Приоритет: {$priorityTask->getPriority()}\n";

