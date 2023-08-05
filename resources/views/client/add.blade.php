<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Adicionar Cliente
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('client')}}">Clientes</a>
                    </li>
                    <li class="breadcrumb-item active">Adicionar</li>
                </ol>

                <form action="{{route('client.save')}}" method="post">
                    <!-- token -->
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" class="form-control" placeholder="Nome do cliente"/>

                        @if($errors->has('name'))
                            <span class="has-error">
                                <strong>{{$errors->first('name')}}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" class="form-control" placeholder="E-mail do cliente"/>

                        @if($errors->has('email'))
                            <span class="has-error">
                                <strong>{{$errors->first('email')}}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group {{$errors->has('address') ? 'has-error' : ''}}">
                        <label for="address">Endereço</label>
                        <input type="text" name="address" class="form-control" placeholder="Endereço do cliente"/>

                        @if($errors->has('address'))
                            <span class="has-error">
                                <strong>{{$errors->first('address')}}</strong>
                            </span>
                        @endif

                    </div>

                    <button class="btn btn-info">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
