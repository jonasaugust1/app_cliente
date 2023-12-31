<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Cliente
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('client')}}">Clientes</a>
                    </li>
                    <li class="breadcrumb-item active">Editar</li>
                </ol>

                <form action="{{route('client.update', $client->id)}}" method="post">
                    <!-- token -->
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put"/>
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" class="form-control" value="{{$client->name}}" placeholder="Nome do cliente"/>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" class="form-control" value="{{$client->email}}" placeholder="E-mail do cliente"/>
                    </div>
                    <div class="form-group">
                        <label for="address">Endereço</label>
                        <input type="text" name="address" class="form-control" value="{{$client->address}}" placeholder="Endereço do cliente"/>
                    </div>

                    <button class="btn btn-info">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
