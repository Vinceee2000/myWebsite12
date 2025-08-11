<div class="flex flex-col items-center justify-center min-h-screen space-y-6">
    <h1 class="text-3xl font-bold">Count: {{ $count }}</h1>

    <div class="space-x-4">
        <button
            wire:click="increment"
            class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition"
        >
            +
        </button>

        <button
            wire:click="decrement"
            class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition"
            @if($count === 0) disabled class="opacity-50 cursor-not-allowed" @endif
        >
            -
        </button>
    </div>
</div>
