<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Clientes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               View de lista de clientes

               @forelse($clients as $client)
                    <li>{{$client->name}}</li>
               @empty
                    <p>No clients found.</p>
               @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
