<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="p-6 text-center font-bold text-4xl text-gray-900 dark:text-gray-100 underline">
                Your task today
            </h2>
            @livewire('task.index')
        </div>
    </div>
</x-app-layout>
