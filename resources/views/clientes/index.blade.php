@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1 class="m-0 text-dark">Clientes</h1>
@stop

@section('content')

    <div class="container-fluid pb-3">
        <div class="d-flex w-100   justify-content-start">
            <div> <a href="{{ route('clientes.pdf') }}" role="button" class="btn mb-5  btn-outline-danger"> <i
                        class="fa fa-file"></i>
                    Gerar
                    PDF</a>
            </div>
            <div>
                <a href="{{ route('clientes.inserir') }}" role="button" class="btn mb-5  ml-2 btn-outline-primary"> <i
                        class="fa fa-plus"></i> Inserir Cliente
                </a>
            </div>
        </div>
        @if (session()->has('sucesso'))
            <div class="alert alert-success">
                {{ session('sucesso') }}
            </div>
        @endif
        @if (session()->has('erro'))
            <div class="alert alert-danger">
                {{ session('erro') }}
            </div>
        @endif
        <table class="vendas mt-5 table text-center">
            <thead>
                <tr>
                    <th>Nome</th>

                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Data de Cadastro</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->cpf }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td class="text-center">
                            {{ date('d/m/Y', strtotime($cliente->data_cadastro)) }}
                        </td>

                        <td class="d-flex  flex-row flex-wrap">
                            <a href="{{ route('clientes.editar', ['id' => $cliente->id]) }}"role="button"
                                class=" btn btn-success mr-1 ml-1"><i class="fa fa-pen"></i>
    </div>
    <a href="{{ route('clientes.excluir', ['id' => $cliente->id]) }}"role="button" class=" btn btn-danger"><i
            class="fa fa-trash"></i></div>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>


    @stop
    @section('scripts')
        <script src="{{ asset('js/vendas.js') }}"></script>
    @endsection
