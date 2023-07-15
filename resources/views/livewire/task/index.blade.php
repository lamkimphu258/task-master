<div>
    <h2 class="p-6 text-center font-bold text-4xl text-gray-900 dark:text-gray-100 underline">
        Tasks Today
    </h2>
    @foreach($unFinishedTasks as $task)
    @if (!$task->is_finished)
    <div class="px-4 py-2 text-justify gap-5 bg-white rounded-lg mb-2 grid grid-cols-12 h-[60px] hover:border hover:border-lime-500 hover:cursor-pointer items-center" wire:key="task-{{ $task->id }}" :class="isFinished && 'hidden'">
        <p class="grow col-span-11">{{ $task->title }}</p>
        <button wire:click="finish({{$task->id}})" class="rounded-lg bg-lime-500 hover:bg-lime-700 px-4 col-span-1 h-full">{{ $task->is_finished ? '' : 'Done'}}</button>
    </div>
    @endif
    @endforeach

    <h2 class="p-6 text-center font-bold text-4xl text-gray-900 dark:text-gray-100 underline">
        Finished Tasks
    </h2>
    @foreach($finishedTasks as $task)
    @if ($task->is_finished)
    <div class="px-4 py-2 text-justify gap-5 bg-white rounded-lg mb-2 grid grid-cols-12 h-[60px] hover:border hover:border-lime-500 hover:cursor-pointer items-center" wire:key="task-{{ $task->id }}">
        <p class="grow col-span-11">{{ $task->title }}</p>
        <button wire:click="undo({{$task->id}})" class="rounded-lg bg-lime-500 hover:bg-lime-700 px-4 col-span-1 h-full">{{ $task->is_finished ? 'Undo' : ''}}</button>
    </div>
    @endif
    @endforeach
</div>
