<x-app-layout>
    <x-slot name="title">{{ $entry->id }}</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $entry->id }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="text-align: center">
                {!! $entry->details['html'] ?? 'Rendering Error' !!}
            </div>
        </div>
    </div>
</x-app-layout>

