<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // view page dashboard
    public function dashboard()
    {
        $user = Auth::user();

        return view('dashboard', compact('user'));
    }

    // view page welcome
    public function welcome()
    {
        return view('welcome');
    }

    // view page contact
    public function contact()
    {
        return view('pages.contact');
    }

    // view page acecessibility
    public function accessibility()
    {
        return view('pages.accessibility');
    }

    // view's looker
    public function balancogeral() {
        $user = Auth::user();
        return view('lookers.balanco-geral', compact('user'));
    }

    public function cidadebeneficario() {
        $user = Auth::user();
        return view('lookers.cidade-beneficiario', compact('user'));
    }

    public function ministeriotematica() {
        $user = Auth::user();
        return view('lookers.ministerio-tematica', compact('user'));
    }

    public function fichaprocesso() {
        $user = Auth::user();
        return view('lookers.ficha-processo', compact('user'));
    }

    public function votosdeputado() {
        $user = Auth::user();
        return view('lookers.votos-deputado', compact('user'));
    }

    public function votosvereador() {
        $user = Auth::user();
        return view('lookers.votos-vereador', compact('user'));
    }
}
