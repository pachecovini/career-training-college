<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laravel\Sanctum\HasApiTokens;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class UserController extends Controller
{
    // Method to handle user registration
    public function register(Request $request)
    {
        // Create a new instance of the User model
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->save();
    }

    // Method to handle user login
    public function login(Request $request)
    {
        $credenciais = $request->only('email', 'password');

        if (Auth::attempt($credenciais)) {
            // $request->session()->regenerate();
            $user = Auth::user();
            // $user = $request->user();
            $token = $user->createToken('authToken')->plainTextToken;
            return redirect()->intended('index')->with('token', $token);
        }

        return redirect('/login')->withErrors(['message' => 'Invalid credentials']);
    }


    public function logout(Request $request)
    {

        $user = $request->user();

        if ($user) {
            $user->tokens()->delete();
        } else {
            return redirect('/login')->withErrors(['message' => 'User not Authenticated']);
        }

        // Invalida a sessão do usuário
        $request->session()->invalidate();

        // Regenera o token de sessão
        $request->session()->regenerateToken();

        // Revoga todos os tokens do usuário
        $request->user()->tokens()->delete();

        return redirect('/login')->withErrors(['message' => 'User not Authenticated']);
    }
}
