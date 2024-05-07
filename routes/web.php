<?php

use Illuminate\Support\Facades\Route;

// Landing page ASPAR, não precisa estar autenticado.
Route::get('/', function () {
    return view('welcome');
});

// Rota Pagina Contato, não precisa estar autenticado.
Route::get('/contatos', function () {
    return view('pages.contact');
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
