<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // <--- OBLIGATORIO para guardar en la base de datos
use Illuminate\Support\Facades\Hash; // <--- OBLIGATORIO para encriptar la clave

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function register(Request $request) 
{
    
    $validatedData = $request->validate([
        'nombre'   => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'email'    => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

  
    \App\Models\User::create([
        'name'     => $validatedData['nombre'] . ' ' . $validatedData['apellido'],
        'email'    => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
        'username' => $validatedData['email'],
        'user_type' => 'user',
    ]);

    return redirect()->route('login')->with('success', 'Usuario registrado correctamente');
}
    public function login()
{
    # Validar los datos de inicio de sesión
    $credentials = request()->validate([
        'email' => 'required|string|email',
        'password' => 'required|string'
    ]);

    # Intentar iniciar sesión
    if (auth()->attempt($credentials)) {
        return redirect()->route('home');
    }

    return back()->withErrors([
        'email' => 'Las credenciales no son correctas.',
    ]);
}

public function logout(Request $request)
{
    auth()->logout(); 

    $request->session()->invalidate(); 
    $request->session()->regenerateToken();

    return redirect('/login'); 
}
}
