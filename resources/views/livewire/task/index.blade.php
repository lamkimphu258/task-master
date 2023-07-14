<div>@foreach($tasks as $task)
    @if (!$task->is_finished)
    <div x-data="{ isFinished: false }" class="px-4 py-2 text-justify gap-5 bg-white rounded-lg mb-2 grid grid-cols-12 h-[60px]" wire:key="task-{{ $task->id }}" :class="isFinished && 'hidden'">
        <p class="grow col-span-11">{{ $task->title }}</p>
        <button x-on:click="isFinished = true" wire:click="delete({{$task->id}})" class="rounded-lg bg-lime-500 hover:bg-lime-700 px-4 col-span-1 h-[50px]">{{ $task->is_finished ? '' : 'Done'}}</button>
    </div>
    @endif
    @endforeach
</div>
