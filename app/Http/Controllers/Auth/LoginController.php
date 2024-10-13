<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('login'); // Asegúrate de que la vista 'login' exista
    }

    public function login(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Registrar en los logs
        Log::info('Iniciando sesión con el correo: ' . $request->email);
        Log::info('Contraseña ingresada: ' . $request->password);

        // Intentar autenticar al usuario
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Autenticación exitosa
            Log::info('Inicio de sesión exitoso para: ' . $request->email);

            // Obtener el usuario autenticado
            $user = Auth::user();

            // Redirigir según el rol
            if ($user->role === 'client') {
                return redirect()->route('clienthome');
            } elseif ($user->role === 'employee') {
                return redirect()->route('employeehome');
            } elseif ($user->role === 'company') {
                return redirect()->route('companyhome');
            } else {
                // En caso de que el rol no esté definido
                Auth::logout();
                return redirect()->route('login')->withErrors([
                    'email' => 'Rol de usuario no reconocido.',
                ]);
            }
        }

        // Si falla la autenticación
        Log::warning('Las credenciales son incorrectas para: ' . $request->email);
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
