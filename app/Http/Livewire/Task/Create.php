<?php

namespace App\Http\Livewire\Task;

use App\Models\Task;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Create extends Component
{
    public string $title;

    public function render(): View|Factory
    {
        return view('livewire.task.create');
    }

    public function add(): void
    {
        Task::create([
            'title' => $this->title,
            'user_id' => auth()->user()->id,
        ]);
        $this->title = '';
        $this->emit('createTask');
    }
}
