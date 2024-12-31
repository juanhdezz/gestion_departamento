<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class AuthController extends Controller
{
    /**
     * Mostrar el formulario de inicio de sesión.
     */
    public function showLoginForm()
    {
        return view('auth.login'); // Asegúrate de que esta vista exista.
    }

    /**
     * Manejar el inicio de sesión del usuario.
     */
    public function login(Request $request)
    {
        // Validar las credenciales de entrada
        $credentials = $request->validate([
            'login' => 'required|string',  // Asumo que el campo 'login' es el que usas para el identificador
            'password' => 'required|string',
        ]);

        // Intentar autenticar al profesor
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Proteger la sesión contra fijación

            // Obtener el profesor autenticado
            $professor = Auth::user();  // Obtiene el profesor autenticado
            
            // Actualizar el campo 'last_access' del profesor autenticado
            $professor->last_access = Carbon::now();  // Actualiza la columna 'last_access'
            $professor->save(); // ignorar error
            // Guardar los cambios en la base de datos
            // Redirigir al dashboard
            return redirect()->intended(route('dashboard'));
        }
        

        // Si falla, volver al formulario con un mensaje de error
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Cerrar la sesión del usuario.
     */
    public function logout(Request $request)
    {
        Auth::logout(); // Cerrar sesión

        $request->session()->invalidate();
        $request->session()->regenerateToken(); // Regenerar el token CSRF

        return redirect()->route('home'); // Ajusta la ruta si es necesario
    }
}
