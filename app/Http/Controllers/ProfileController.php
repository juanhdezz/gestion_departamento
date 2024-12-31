<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Mostrar el perfil del profesor autenticado.
     */
    public function index()
    {
        $professor = Auth::user(); // Obtener el profesor logueado
        return view('profile.index', compact('professor')); // Pasar datos a la vista
    }

    /**
     * Mostrar el formulario de edición del perfil.
     */
    public function edit()
    {
        $professor = Auth::user(); // Obtener el profesor logueado
        return view('profile.edit', compact('professor')); // Pasar datos a la vista
    }

    /**
     * Actualizar los datos del perfil del profesor.
     */
    public function update(Request $request)
    {
        $professor = Auth::user(); // Obtener el profesor logueado

        // Validar los datos enviados
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:professors,email,' . $professor->id,
            'office' => 'nullable|string|max:255',
            'personal_phone' => 'nullable|string|max:15',
            'website' => 'nullable|url|max:255',
        ]);

        // Actualizar los datos en la base de datos
        $professor->update($validatedData);

        // Redirigir al perfil con un mensaje de éxito
        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }
}
