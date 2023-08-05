<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Adicionar Telefone
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
                        <a href="{{route('client.detail', $client->id)}}">Detalhe</a>
                    </li>
                    <li class="breadcrumb-item active">Adicionar</li>
                </ol>

                <form action="{{ route('telephone.save', $client->id) }}" method="post">
                    <!-- token -->
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" name="title" class="form-control" placeholder="Telefone pessoal, trabalho..."/>

                        @if($errors->has('title'))
                            <span class="has-error">
                                <strong>{{$errors->first('title')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="ddi">DDI</label>
                        <input type="text" name="ddi" class="form-control" placeholder="Código do país (+55)"/>

                        @if($errors->has('ddi'))
                            <span class="has-error">
                                <strong>{{$errors->first('ddi')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="ddd">DDD</label>
                        <input type="text" name="ddd" class="form-control" placeholder="Código do estado (79)"/>

                        @if($errors->has('ddd'))
                            <span class="has-error">
                                <strong>{{$errors->first('ddd')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="phone">Número</label>
                        <input type="text" name="phone" class="form-control" placeholder="99988-7766"/>

                        @if($errors->has('phone'))
                            <span class="has-error">
                                <strong>{{$errors->first('phone')}}</strong>
                            </span>
                        @endif
                    </div>

                    <button class="btn btn-info">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
