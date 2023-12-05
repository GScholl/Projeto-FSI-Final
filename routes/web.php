<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/valores-meses', [App\Http\Controllers\VendaController::class, 'getValoresMeses12'])->name('vendas.valores_meses');
Route::get('/novos-clientes', [App\Http\Controllers\ClienteController::class, 'novosClientes12'])->name('clientes.novosClientes');
Route::get('/clientes', [App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/pdf', [App\Http\Controllers\ClienteController::class, 'gerarPDF'])->name('clientes.pdf');
Route::get('/vendas/pdf', [App\Http\Controllers\VendaController::class, 'gerarPDF'])->name('vendas.pdf');
Route::get('/vendas', [App\Http\Controllers\VendaController::class, 'index'])->name('vendas.index');
Route::get('/vendas/editar/{id}', [App\Http\Controllers\VendaController::class, 'editar'])->name('vendas.editar')->where('id', '[0-9]+');
Route::post('/vendas/edita', [App\Http\Controllers\VendaController::class, 'edita'])->name('vendas.edit');
Route::get('/vendas/excluir/{id}', [App\Http\Controllers\VendaController::class, 'excluir'])->name('vendas.excluir')->where('id', '[0-9]+');
Route::post('/vendas/inserir', [App\Http\Controllers\VendaController::class, 'insere'])->name('vendas.inserir');
Route::get('/vendas/inserir', [App\Http\Controllers\VendaController::class, 'inserir'])->name('vendas.formInserir');


Route::middleware('auth:sanctum')->get('/teste', function () {
    return json_encode(["bosta" => true]);
 });
