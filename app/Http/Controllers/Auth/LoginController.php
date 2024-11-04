<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; 
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth; // Importa el facade Auth

class LoginController extends Controller
{

    public function getAuthenticatedUser()
    {
        if (Auth::check()) {
            return response()->json(Auth::user());
        } else {
            return response()->json(null, 401);
        }
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }


        public function logout()
    {
        Auth::logout(); // Cierra la sesión del usuario
        return redirect()->route('welcome')->with('success', 'Has cerrado sesión exitosamente.');
    }
    
    public function login(LoginRequest $request)
    {
        // Intenta autenticar al usuario
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('login'); 
        }

        // Si las credenciales son incorrectas
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas son incorrectas.',
        ])->onlyInput('email'); // Mantiene el correo ingresado en el formulario
    }
 
}
