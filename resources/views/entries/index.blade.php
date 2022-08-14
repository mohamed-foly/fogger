<x-app-layout>
    <x-slot name="title">{{ __('Entries') }}</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Entries') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="text-align: center">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full shadow-md rounded">
                        <thead class="bg-gray-50">
                            <th class="p-4 font-bold">Id</th>
                            <th class="p-4 font-bold">Host</th>
                            <th class="p-4 font-bold">Message</th>
                            <th class="p-4 font-bold">Details</th>
                        </thead>
                        <tbody class="divide-y divide-gray-300">
                            @foreach ($entries as $entry)
                                <tr class="p-16">
                                    <td class="p-4">{{ $entry->id }}</td>
                                    <td class="p-4">{{ $entry->host_name }} | {{ $entry->host_address }}</td>
                                    <td class="p-4">{{ $entry->message }}</td>
                                    <td class="p-4"> <a
                                            class="m-16 bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded"
                                            href="{{ route('entry.show', $entry->id) }}">Details</a> </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="m-4">
                        {{ $entries->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
