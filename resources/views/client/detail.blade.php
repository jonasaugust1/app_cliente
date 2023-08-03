<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de detalhes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="{{route('client')}}">Clientes</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Detalhe
                    </li>
                </ol>

                <p><b>Cliente:</b> {{$client->name}}</p>
                <p><b>Email:</b> {{$client->email}}</p>
                <p><b>Endereço:</b> {{$client->address}}</p>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th>DDI</th>
                            <th>DDD</th>
                            <th>Número</th>
                            <th>Ação</th>
                        </tr>
                        <tbody>
                        @forelse($client->telephones as $phone)
                            <tr>
                                <th scope="row">{{$phone->id}}</th>
                                <td>{{$phone->title}}</td>
                                <td>{{$phone->ddi}}</td>
                                <td>{{$phone->ddd}}</td>
                                <td>{{$phone->phone}}</td>
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
                            <p>Não foram encontrados telefones para esse cliente.</p>
                        @endforelse
                        </tbody>
                    </thead>
                </table>

                <a class="btn btn-info" href="{{route('telephone.add', $client->id)}}">Adicionar Telefone</a>
            </div>
        </div>
    </div>
</x-app-layout>
