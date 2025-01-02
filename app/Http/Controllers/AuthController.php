<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
            'user_type' => 'required|in:professor,trainee',
        ]);

        $guard = $credentials['user_type'] === 'professor' ? 'web' : 'trainee';

        // Intentar autenticar con el guard correspondiente
        if (Auth::guard($guard)->attempt(['login' => $credentials['login'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            // Obtener el usuario autenticado
            $user = Auth::guard($guard)->user();
            if($guard === 'web'){
                $user->last_access = Carbon::now();  // Actualizar 'last_access'
                $user->save();
            }
            
            return redirect()->route('dashboard');
        }

        // Si las credenciales son incorrectas
        return back()->withErrors([
            'login' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();  // Cerrar sesión

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
