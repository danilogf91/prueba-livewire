<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    {{ $slot }}

    {{-- @livewire('projects-data') --}}

    {{-- @livewire('counter') --}}
</x-app-layout>
