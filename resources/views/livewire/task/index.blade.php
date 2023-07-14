@foreach($tasks as $task)
<div class="px-4 py-2 text-justify flex gap-5 justify-items-center bg-white rounded-lg">
    <p>{{ $task->title }}</p>
    <button class="rounded-full bg-lime-500	hover:bg-lime-700 px-4">{{ $task->is_finished ? '' : 'Done'}}</button>
</div>
@endforeach
