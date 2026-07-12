<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.app')]
class TaskManager extends Component
{
    public function render()
    {
        return view('livewire.task-manager', [
            'tasks' => Task::latest()->get(),
        ]);
    }
}