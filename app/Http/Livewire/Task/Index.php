<?php

namespace App\Http\Livewire\Task;

use App\Models\Task;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'createTask' => '$refresh',
        'finishTask' => '$refresh',
        'undoTask' => '$refresh',
    ];

    public Collection $finishedTasks;

    public Collection $unFinishedTasks;

    public function mount(): void
    {
        $this->getFinishedAndUnFinishedTasks();
    }

    public function hydrate(): void
    {
        $this->getFinishedAndUnFinishedTasks();
    }

    private function getFinishedAndUnFinishedTasks(): void
    {
        $this->finishedTasks = Task::where([
            'user_id' => auth()->user()->id,
            'is_finished' => true,
        ])
            ->get();

        $this->unFinishedTasks = Task::where([
            'user_id' => auth()->user()->id,
            'is_finished' => false,
        ])
            ->get();
    }

    public function render(): View|Factory
    {
        return view('livewire.task.index', [
            'finishedTasks' => $this->finishedTasks,
            'unFinishedTasks' => $this->unFinishedTasks
        ]);
    }

    public function finish($id): void
    {
        Task::where('id', $id)->update(['is_finished' => true]);
        $this->emit('finishTask');
    }

    public function undo($id): void
    {
        Task::where('id', $id)->update(['is_finished' => false]);
        $this->emit('undoTask');
    }
}
