@extends('adminlte::page')

@section('title', 'Editar Cliente')

@section('content_header')
    <h1 class="m-0 text-dark">Inserir Cliente </h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('clientes.insere')}}" method="post">
                    @csrf
                    <input type="hidden" name="id"  value="">
                    <label class="mb-2"for="nome">Nome:</label>
                    <input type="text" name="nome"  value=""class="form-control" placeholder="Digite o nome">
                    <label class="mb-2"for="sobrenome">Sobrenome:</label>
                    <input type="text" name="sobrenome"  value=""class="form-control" placeholder="Digite o sobrenome">
                    <label class="mb-2" for="cpf">CPF:</label>
                    <input type="text" name="cpf" value="" class="form-control" placeholder="Digite o cpf">
                    <label class="mb-2" for="email">E-mail:</label>
                    <input type="email" name="email"  value=""class="form-control" placeholder="Digite o E-mail">
                    <button class="btn mt-3 w-100 btn-success"><i class="fa fa-plus"></i> Inserir</button>
                </form>
            </div>
        </div>
    </div>

@stop
