<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// rotas fora de autenticação
Route::get('/', [DashboardController::class, 'welcome'])->name('welcome');
Route::get('/contatos', [DashboardController::class, 'contact'])->name('contact');
Route::get('/acessibilidade', [DashboardController::class, 'accessibility'])->name('accessibility');

// rotas necessitam autenticação
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/balanco-geral', [DashboardController::class, 'balancogeral'])->name('balanco-geral');
    Route::get('/consulta-cidade-beneficiario', [DashboardController::class, 'cidadebeneficario'])->name('cidade-beneficiario');
    Route::get('/consulta-ministerio-tematica', [DashboardController::class, 'ministeriotematica'])->name('consulta-ministerio-tematica');
    Route::get('/consulta-ficha-processo', [DashboardController::class, 'fichaprocesso'])->name('consulta-ficha-processo');

    Route::get('/mapa-votacoes', [DashboardController::class, 'mapavotos'])->name('mapa-votos');
    Route::get('/votacoes-deputados', [DashboardController::class, 'votosdeputado'])->name('votacoes-deputados');
    Route::get('/votacoes-vereadores', [DashboardController::class, 'votosvereador'])->name('votacoes-vereadores');

    Route::get('/pedidos-ogu', [DashboardController::class, 'pedidosogu'])->name('pedidos-ogu');

});
