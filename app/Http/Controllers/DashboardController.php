<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::guard('web')->check()) {
            $professor = Auth::guard('web')->user();
            return view('professors.dashboard', compact('professor'));
        }

        if (Auth::guard('trainee')->check()) {
            $trainee = Auth::guard('trainee')->user();
            return view('trainees.dashboard', compact('trainee'));
        }

        return redirect()->route('login');
    }
}
