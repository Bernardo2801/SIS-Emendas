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
    Route::get('/consulta-cidade-beneficiario', [DashboardController::class, 'cidadebeneficiario'])->name('cidade/beneficiario');
});
