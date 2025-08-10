<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Todo List</h1>

    <div class="flex space-x-2 mb-4">
        <input type="text" wire:model="task" placeholder="Enter a task"
               class="border p-2 rounded w-full">
        <button wire:click="addTask"
                class="px-4 py-2 bg-blue-500 text-white rounded">Add</button>
    </div>

    <ul class="space-y-2">
        @foreach($tasks as $index => $t)
            <li class="flex justify-between items-center bg-gray-100 p-2 rounded">
                <span>{{ $t }}</span>
                <button wire:click="removeTask({{ $index }})"
                        class="text-red-500 hover:underline">Remove</button>
            </li>
        @endforeach
    </ul>
</div>
