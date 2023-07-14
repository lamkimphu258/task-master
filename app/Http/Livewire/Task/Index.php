<?php

namespace App\Http\Livewire\Task;

use App\Models\Task;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{
    public Collection $tasks;

    public function mount()
    {
        $this->tasks = Task::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function render()
    {
        return view('livewire.task.index', ['tasks' => $this->tasks]);
    }

    public function delete($id)
    {
        Task::where('id', $id)->delete();
    }
}
