<?php

namespace App\Livewire;

use App\Events\TodoCreated;
use Livewire\Component;
use Livewire\Attributes\On;

class Todo extends Component
{
    public $task;
    public $tasks = [];

    protected $listeners = ['todoAdded' => 'addTask'];


    public function render()
    {
        return view('livewire.todo')->layout('layouts.app');
    }

    public function submit()
    {
        // Dispatch the TodoCreated event
        event(new TodoCreated($this->task));

        // Clear the input field
        $this->task = '';
    }

    public function addTask($task)
    {
        $this->tasks[] = $task;
    }
}
