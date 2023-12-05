@extends('adminlte::page')

@section('title', 'Inserir Venda')

@section('content_header')
    <h1 class="m-0 text-dark">Inserir nova Venda </h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('vendas.inserir') }}" method="post">
                    @csrf

                    <label class="mb-2"for="titulo">Título:</label>
                    <input type="text" name="titulo" class="form-control"
                        placeholder="Digite o Título">
                    <label class="mb-2"for="descricao">Descrição:</label>
                    <input type="text" name="descricao" class="form-control"
                        placeholder="Digite a Descrição">
                    <label class="mb-2" for="valor">Valor:</label>
                    <input type="number" name="valor" max="100000000" min="0"  class="form-control"
                        placeholder="Digite o Valor">
                        <label for="cliente_id">Cliente</label>
                    <select name="cliente_id" class="form-control">
                        @foreach ($clientes as $cliente)
                            <option value="{{ $cliente->id }}">
                                {{ $cliente->nome . ' ' . $cliente->sobrenome }}</option>
                        @endforeach
                    </select>
                        <label class="mb-2" for="status">Status:</label>
                        <select name="status" class="form-control">
                            <option  value="F">Faturado</option>
                            <option  value="P">Pendente</option>
                        </select>

                        <button type="submit" class="btn  mt-3 w-100 btn-success"><i class="fa fa-plus"></i> inserir</button>
                </form>
            </div>
        </div>
    </div>

@stop
