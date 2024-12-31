<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Obtiene el profesor autenticado
        $professor = auth()->guard('web')->user();

        return view('dashboard', compact('professor'));
    }
}


