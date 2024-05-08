<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        return view('dashboard', compact('user'));
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function accessibility()
    {
        return view('pages.accessibility');
    }

    public function cidadebeneficiario()
    {
        $user = Auth::user();

        return view('lookers.cidade-beneficiario', compact('user'));
    }
}
