<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Venda;
use App\Models\Cliente;

use Barryvdh\DomPDF\Facade\Pdf;

class VendaController extends Controller
{
    //
    public function __construct()
    {

        $this->middleware("auth");
    }

    public function index()
    {
        $vendas = Venda::All();


        return view("vendas.index", compact("vendas"));
    }
    public function inserir()
    {
        $clientes = Cliente::All();
        return view("vendas.inserir", compact("clientes"));
    }
    public function insere(Request $request)
    {


        $venda = new Venda();

        $venda->titulo = $request->titulo;
        $venda->descricao = $request->descricao;
        $venda->valor = $request->valor;
        $venda->cliente_id = $request->cliente_id;
        $venda->status = $request->status;
        $venda->save();
        return redirect()->route('vendas.index')->with('sucesso', 'Venda Adicionada com sucesso!');
    }
    public function edita(Request $request)
    {
        $venda = Venda::find($request->id);
        $venda->id = $request->id;
        $venda->titulo = $request->titulo;
        $venda->descricao = $request->descricao;
        $venda->valor = $request->valor;
        $venda->cliente_id = $request->cliente_id;
        $venda->status = $request->status;
        $venda->save();
        return redirect()->route('vendas.index')->with('sucesso', 'Venda editada com sucesso!');
    }
    public function excluir($id){

        $venda = Venda::find($id);
        if ($venda->delete()) {

            return redirect()->route('vendas.index')->with("sucesso", "Venda Excluida com sucesso");
        }

        return redirect()->route('vendas.index')->with("erro", "Venda não foi Excluida ");

    }
    public function editar($id)
    {
        $venda = Venda::find($id);
        $clientes = Cliente::All();


        return view("vendas.editar", compact("venda", "clientes"));
    }

    public function gerarPDF()
    {
        $vendas = Venda::All();

        $pdf = Pdf::loadView('vendas.indexPDF', compact("vendas"));
        return $pdf->download('vendas.pdf');
    }
    public function getValoresMeses12()
    {
        $query = Venda::select(
            DB::raw('EXTRACT(MONTH FROM data_compra) AS mes'),
            DB::raw('SUM(valor) AS valor')
        )
            ->where('data_compra', '>=', now()->subMonths(12))
            ->where('status', '=', 'F')
            ->groupBy('mes')
            ->orderBy('mes')
            ->get();

        return json_encode($query);
    }
}
