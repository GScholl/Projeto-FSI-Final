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


                </tr>
            @endforeach
        </tbody>
    </table>
</body>
