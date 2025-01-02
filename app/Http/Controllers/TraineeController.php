<?php

namespace App\Http\Controllers;

use App\Models\Trainee;
use Illuminate\Http\Request;

class TraineeController extends Controller
{
    public function index()
    {
        $trainees = Trainee::all(); // Obtener todos los becarios sin relaciones
        return view('trainees.index', compact('trainees'));
    }

    public function create()
    {
        return view('trainees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required|unique:trainees,dni',
            'name' => 'required|string',
            'email' => 'required|email|unique:trainees,email',
            'login' => 'required|string',
            'password' => 'required|string',
            'office' => 'required|string',
            'current_category' => 'required|string',
            'total_days' => 'required|integer',
            'current_responsible' => 'required|string', // Campo de texto para el nombre del responsable
            'scholarship_end' => 'required|date',
            'teaching_credits_department' => 'required|integer',
            'desired_teaching_credits' => 'required|integer',
        ]);

        Trainee::create($request->all());

        return redirect()->route('trainees.index')->with('success', 'Trainee created successfully.');
    }

    public function edit(Trainee $trainee)
    {
        return view('trainees.edit', compact('trainee'));
    }

    public function update(Request $request, Trainee $trainee)
    {
        $request->validate([
            'dni' => 'required|unique:trainees,dni,' . $trainee->id,
            'name' => 'required|string',
            'email' => 'required|email|unique:trainees,email,' . $trainee->id,
            'login' => 'required|string',
            'password' => 'required|string',
            'office' => 'required|string',
            'current_category' => 'required|string',
            'total_days' => 'required|integer',
            'current_responsible' => 'required|string', // Campo de texto para el nombre del responsable
            'scholarship_end' => 'required|date',
            'teaching_credits_department' => 'required|integer',
            'desired_teaching_credits' => 'required|integer',
        ]);

        $trainee->update($request->all());

        return redirect()->route('trainees.index')->with('success', 'Trainee updated successfully.');
    }

    public function destroy(Trainee $trainee)
    {
        $trainee->delete();
        return redirect()->route('trainees.index')->with('success', 'Trainee deleted successfully.');
    }

    public function searchTrainees(Request $request)
    {
        // Realiza una búsqueda de trainees por nombre (o cualquier campo que desees)
        $search = $request->input('search');
        $trainees = Trainee::where('name', 'like', "%{$search}%")
            ->orWhere('dni', 'like', "%{$search}%")
            ->get();

        return view('trainees.index', compact('trainees'));
    }
}
