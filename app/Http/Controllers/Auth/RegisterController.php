<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User; 

use App\Http\Requests\RegisterRequest; // Importacion request registro 

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.login');
    }
    public function register(RegisterRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'rol'=>$request->rol, // para agregar un administrador -> formulario creaccion usuario auth/Register
            'password' => Hash::make($request->password),
        ]);
    
        return redirect()->route('login')->with('success', 'Cuenta creada exitosamente. Ahora puedes iniciar sesión.');
    }
}
