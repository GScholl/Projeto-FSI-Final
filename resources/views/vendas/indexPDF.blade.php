<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vendas</title>
    <style>

        table {
            width: 100%;
        }

        th,
        td {
            font-size: 10pt;
        }

        tr th {

            background-color: lightgray;
            border: 1px solid lightgray;
        }

        thead {
            background-color: lightgray !important;
        }

        table:not(.cabecalho-2) {
            border-collapse: collapse;
            /* Mescla as bordas das células */
            border-spacing: 0;
            /* Define o espaçamento entre as células como zero */
        }

        td,
        th {
            text-align: center;
        }
    </style>
</head>

<body>

    <h1>Relatório de Vendas</h1>
    <table class="vendas mt-5 table text-center">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Status</th>
                <th>Data de Compra</th>

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
                            {{ $venda->status == 'P' ? 'Pago' : 'Pendente' }}
                        </div>
                    </td>
                    <td>{{ date('d/m/Y', strtotime($venda->data_compra)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

</body>

</html>
