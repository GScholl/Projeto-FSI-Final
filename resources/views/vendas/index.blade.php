@extends('adminlte::page')

@section('title', 'Vendas')

@section('content_header')
    <h1 class="m-0 text-dark">Vendas</h1>
@stop

@section('content')

    <div class="container-fluid pb-3">
        <div class="d-flex w-100   justify-content-start">
            <div> <a href="{{ route('vendas.pdf') }}" role="button" class="btn mb-5  btn-outline-danger"> <i
                        class="fa fa-file"></i>
                    Gerar
                    PDF</a>
            </div>
            <div>
                <a href="{{ route('vendas.formInserir') }}" role="button" class="btn mb-5  ml-2 btn-outline-primary"> <i
                        class="fa fa-plus"></i> Inserir Venda
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
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Status</th>
                    <th>Data de Compra</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendas as $venda)
                    <tr>
                        <td>{{ $venda->titulo }}</td>
                        <td>{{ $venda->descricao }}</td>
                        <td>R$ {{ number_format($venda->valor, 2, ',', '.') }}</td>
                        <td class="text-center">
                            <div
                                class=" p-2 w-100 text-center rounded {{ $venda->status == 'F' ? 'bg-success' : 'bg-warning' }}">
                                {{ $venda->status == 'F' ? 'Faturado' : 'Pendente' }}
                            </div>
                        </td>
                        <td>{{ date('d/m/Y', strtotime($venda->data_compra)) }}</td>
                        <td class="d-flex  flex-row flex-wrap">
                            <a href="{{ route('vendas.editar', ['id' => $venda->id]) }}"role="button"
                                class=" btn btn-success mr-1 ml-1"><i class="fa fa-pen"></i>
    </div>
    <a href="{{ route('vendas.excluir', ['id' => $venda->id]) }}"role="button" class=" btn btn-danger"><i
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
