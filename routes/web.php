<?php

use Illuminate\Support\Facades\Route;

// Rota Pagina inicial do sistema (apresentação), não precisa estar autenticado.
Route::get('/', function () {
    return view('welcome');
});

// Rotas que estiverem dentro do Middleware, estarão protegidas pela camada de login.
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () { // Aqui dentro colocar rotas e names que devem ser protegidos pelo login.
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
