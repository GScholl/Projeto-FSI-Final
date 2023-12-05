<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $vendasPendentes = Venda::select(

            DB::raw('SUM(valor) AS valor')
        )->where('data_compra', '>=', now()->subMonths(1))
            ->where('status', '=', 'P')
            ->first();

        $vendasFaturadas = Venda::select(

            DB::raw('SUM(valor) AS valor')
        )->where('data_compra', '>=', now()->subMonths(1))
            ->where('status', '=', 'F')
            ->first();
        $vendasTotais = Venda::select(

            DB::raw('SUM(valor) AS valor')
        )->where('data_compra', '>=', now()->subMonths(1))
            ->first();

        return view('home', compact('vendasPendentes', 'vendasFaturadas','vendasTotais'));
    }
}
