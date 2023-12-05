function obterNomeMesPorExtenso(numeroMes) {
    switch (numeroMes) {
        case 1:
            return 'Janeiro';
        case 2:
            return 'Fevereiro';
        case 3:
            return 'Março';
        case 4:
            return 'Abril';
        case 5:
            return 'Maio';
        case 6:
            return 'Junho';
        case 7:
            return 'Julho';
        case 8:
            return 'Agosto';
        case 9:
            return 'Setembro';
        case 10:
            return 'Outubro';
        case 11:
            return 'Novembro';
        case 12:
            return 'Dezembro';
        default:
            return 'Mês Inválido';
    }
}
let meses = [];
let valores = [];
let meses2= [];
let valores2 = [];
$.ajax({
    url: '/valores-meses',
    type: 'GET',
    dataType: 'json',
    success: function (data) {
        $.each(data, function (index, value) {
            let mes = obterNomeMesPorExtenso(value.mes)
            meses.push(mes);
            valores.push(value.valor.toFixed(2))

        })
        gerarChart(meses, valores);
    },
    error: function (error) {
        console.error('Erro na requisição:', error);
    }
});
$.ajax({
    url: '/novos-clientes',
    type: 'GET',
    dataType: 'json',
    success: function (data) {
        $.each(data, function (index, value) {
            let mes = obterNomeMesPorExtenso(value.mes)
            meses2.push(mes);
            valores2.push(value.clientes)

        })
        gerarChart2(meses2, valores2);
    },
    error: function (error) {
        console.error('Erro na requisição:', error);
    }
});
var ctx = document.getElementById('Grafico6Meses').getContext('2d');
var cty = document.getElementById('Grafico6MesesClientes').getContext('2d');

function gerarChart(meses, valores) {

    var meuGrafico = new Chart(ctx, {
        type: 'line',
        data: {
            labels: meses,
            datasets: [{
                label: 'Faturamento',
                data: valores,
                backgroundColor: 'rgb(25,135,84)',
                borderColor: 'rgb(25,135,84)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


}

function gerarChart2(meses, valores) {

    let grafico = new Chart(cty, {
        type: 'bar',
        data: {
            labels: meses,
            datasets: [{
                label: 'Novos Clientes',
                data: valores,
                backgroundColor: '#007bff',
                borderColor: '#007bff',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


}

