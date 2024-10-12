<?php
require_once 'TaskModel.php';
//  Интерфейс задачи (абстрактный класс или интерфейс)
 
interface TaskInterface
{
    public function getTitle(): string;
    public function getDescription(): string;
    public function getType(): string;
    public function getDate(): ?string;
    public function getPriority(): string;
}


