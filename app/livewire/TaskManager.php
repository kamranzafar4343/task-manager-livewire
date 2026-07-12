<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Task;

class TaskManager extends Component
{
    public function render()
    {
        $tasks = Task::all();

        return view('livewire.task-manager', compact('tasks'));
    }
}