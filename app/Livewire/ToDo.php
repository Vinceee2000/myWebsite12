<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $task;
    public $tasks = [];

    public function addTask()
    {
        if (!empty($this->task)) {
            $this->tasks[] = $this->task;
            $this->task = '';
        }
    }

    public function removeTask($index)
    {
        unset($this->tasks[$index]);
        $this->tasks = array_values($this->tasks);
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
