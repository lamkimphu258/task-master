<div>
    <input wire:keydown.enter="add" wire:model.lazy="title" type="text" name="title" id="title" placeholder="New task" class="rounded-lg w-full mb-2" required/>
    <button wire:click="add" class="p-2 bg-lime-500 rounded-lg w-full">Add Task</button>
</div>
