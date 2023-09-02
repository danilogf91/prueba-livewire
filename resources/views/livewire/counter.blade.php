<div style="text-align: center">
    <button class="bg-red-500 text-gray-50 p-2 rounded" wire:click="increment">+</button>
    <h1>{{ $count }}</h1>

    <input wire:model="search" type="text">

    <h1>{{ $search }}</h1>
</div>
