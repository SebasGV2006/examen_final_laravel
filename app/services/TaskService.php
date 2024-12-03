<?php

namespace App\services;
use App\Models\Task;

class TaskService
{
    public function getTask()
    {
        return Task::all();
    }
}
?>