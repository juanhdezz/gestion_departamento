<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use Carbon\Carbon;

class ProfessorController extends Controller
{
    public function getProfessors()
{
    $professors = Professor::all();
    return view('professors.index', compact('professors'));
}

public function searchProfessors(Request $request)
{
    $searchTerm = $request->input('search');

    if ($searchTerm) {
        // Filtrar por nombre
        $professors = Professor::where('full_name', 'like', '%' . $searchTerm . '%')->get();
    } else {
        // Si no hay búsqueda, devolver todos los profesores
        $professors = Professor::all();
    }

    return view('professors.index', compact('professors'));
}


}
