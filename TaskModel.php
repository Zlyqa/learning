<?php
// Обычная задача (без напоминания, без приоритетов)

class BasicTask implements TaskInterface
{
    private string $title;
    private string $description;

    public function __construct(string $title, string $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getType(): string
    {
        return 'Обычная задача';
    }

    public function getDate(): ?string
    {
        return null;
    }

    public function getPriority(): string
    {
        return 'Normal';
    }
}

// Задача с напоминанием

class ReminderTask implements TaskInterface
{
    private string $title;
    private string $description;
    private string $date;

    public function __construct(string $title, string $description, string $date)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getType(): string
    {
        return 'Важная задача';
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function getPriority(): string
    {
        return 'High';
    }
}

// Задача с приоритетом

class PriorityTask implements TaskInterface
{
    private string $title;
    private string $description;
    private string $priority;

    public function __construct(string $title, string $description, string $priority)
    {
        $this->title = $title;
        $this->description = $description;
        $this->priority = $priority;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getType(): string
    {
        return 'Приоритетная задача';
    }

    public function getDate(): ?string
    {
        return null;
    }

    public function getPriority(): string
    {
        return $this->priority;
    }
}
