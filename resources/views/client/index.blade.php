<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Clientes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        Clientes
                    </li>
                    <li class="breadcrumb-item">
                    <a href="{{route('client.add')}}">Adicionar</a>
                    </li>
                </ol>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Endereço</th>
                            <th>Ação</th>
                        </tr>
                        <tbody>
                        @forelse($clients as $client)
                            <tr>
                                <th scope="row">{{$client->id}}</th>
                                <td>{{$client->name}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->address}}</td>
                                <td>
                                    <a class="btn btn-default" href="{{route('client.edit', $client->id)}}">Editar</a>
                                    <a
                                        class="btn btn-danger"
                                        href="javascript:(confirm('Deletar esse registro?')) ?
                                        window.location.href='{{route('client.delete', $client->id)}}' : false "
                                    >
                                        Deletar
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <p>Não foram encontrados clientes.</p>
                        @endforelse
                        </tbody>
                    </thead>
                </table>
                <div align="center">
                    {!! $clients->links() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
