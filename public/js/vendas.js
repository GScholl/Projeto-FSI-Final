

$(".vendas").DataTable({
    responsive: true,
    order: [[0, "asc"]],
    iDisplayLength: 10,
    ordering: false,
    searching: true,
    language: {
        url: "https://cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json",
    },
    dom: "Bfrtip",

});
