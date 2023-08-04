<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Telefone
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('client')}}">Clientes</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('client.detail', $phone->client->id)}}">Detalhe</a>
                    </li>
                    <li class="breadcrumb-item active">Editar</li>
                </ol>

                <p><b>Cliente:</b> {{$phone->client->name}}</p>
                <form action="{{route('telephone.update', $phone->id)}}" method="post">
                    <!-- token -->
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put"/>
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" name="title" class="form-control" value="{{$phone->title}}"/>
                    </div>
                    <div class="form-group">
                        <label for="ddi">DDI</label>
                        <input type="text" name="ddi" class="form-control" value="{{$phone->ddi}}"/>
                    </div>
                    <div class="form-group">
                        <label for="ddd">DDD</label>
                        <input type="text" name="ddd" class="form-control" value="{{$phone->ddd}}"/>
                    </div>
                    <div class="form-group">
                        <label for="phone">DDD</label>
                        <input type="text" name="phone" class="form-control" value="{{$phone->phone}}"/>
                    </div>

                    <button class="btn btn-info">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
