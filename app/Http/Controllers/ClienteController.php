<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use Barryvdh\DomPDF\Facade\Pdf;

class ClienteController extends Controller
{


    public function __construct()
    {
        $this->middleware("auth");
    }

    public function editar($id)
    {
        $cliente = Cliente::find($id);
        return view("clientes.editar", compact("cliente"));
    }
    public function edita(Request $request)
    {
        $cliente =  Cliente::find($request->id);
        $cliente->id = $request->id;
        $cliente->nome = $request->nome;
        $cliente->sobrenome = $request->sobrenome;
        $cliente->cpf = $request->cpf;
        $cliente->email = $request->email;

        $cliente->save();
        return redirect()->route('clientes.index')->with('sucesso', 'Cliente Editado com sucesso!');
    }
    public function excluir($id){

        $cliente = Cliente::find($id);
        if ($cliente->delete()) {

            return redirect()->route('clientes.index')->with("sucesso", "Cliente Excluido com sucesso");
        }

        return redirect()->route('clientes.index')->with("erro", "Cliente não foi Excluido ");

    }
    public function inserir()
    {


        return view("clientes.inserir");
    }
    public function insere(Request $request)
    {
        $cliente =  new Cliente();

        $cliente->nome = $request->nome;
        $cliente->sobrenome = $request->sobrenome;
        $cliente->cpf = $request->cpf;
        $cliente->email = $request->email;

        $cliente->save();
        return redirect()->route('clientes.index')->with('sucesso', 'Cliente Adicionado com sucesso!');
    }
    public function novosClientes12()
    {
        $query = Cliente::select(
            DB::raw('EXTRACT(MONTH FROM data_cadastro) AS mes'),
            DB::raw('count(id) as clientes')
        )
            ->where('data_cadastro', '>=', now()->subMonths(12))
            ->groupBy('mes')
            ->orderBy('mes')
            ->get();
        // teste
        return json_encode($query);
    }
    public function index()
    {

        $clientes = Cliente::All();

        return view('clientes.index', compact('clientes'));
    }
    public function gerarPDF()
    {
        $clientes = Cliente::All();

        $pdf = Pdf::loadView('clientes.indexPDF', compact("clientes"));
        return $pdf->download('clientes.pdf');
    }
}
