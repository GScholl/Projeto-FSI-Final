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

        return view('clientes.index',compact('clientes'));
    }
    public function gerarPDF()
    {
        $clientes = Cliente::All();

        $pdf = Pdf::loadView('clientes.indexPDF', compact("clientes"));
        return $pdf->download('clientes.pdf');
    }
}
