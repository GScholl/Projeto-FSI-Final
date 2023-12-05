@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-4 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h4>R$ {{ number_format($vendasTotais->valor, 2, ',', '.') }}</h4>
                        <p>Vendas<br>Totais</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-coins"></i>
                    </div>
                    <a href="" class="small-box-footer">Ir para Vendas <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h4> R$ {{ number_format($vendasFaturadas->valor, 2, ',', '.') }}</h4>
                        <p>Vendas<br> deste mês faturadas</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-wallet"></i>
                    </div>
                    <a href="" class="small-box-footer">Ir para Vendas <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-6">

                <div class="small-box text-white bg-warning">
                    <div class="inner">
                        <h4> R$ {{ number_format($vendasPendentes->valor, 2, ',', '.') }}</h4>
                        <p>Vendas do mês<br> Pendentes </p>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <a href="" class="small-box-footer">Ir para Vendas <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>


            <div class="col-lg-6 mb-5 col-12">
                <div class="card mb-5">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-chart-pie mr-1"></i>
                            Faturamento
                        </h3>
                        <div class="card-tools">

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">


                            <canvas id="Grafico6Meses"></canvas>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5 col-12">
                <div class="card mb-5">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-chart-pie mr-1"></i>
                            Novos Clientes
                        </h3>
                        <div class="card-tools">

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">


                            <canvas id="Grafico6MesesClientes"></canvas>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@stop
