<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function registrasi()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        // Validasi request di sini
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return response()->json(['message' => 'User registered successfully']);
    }

    public function login(Request $request)
    {
        // Validasi request di sini

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            return response()->json(['message' => 'Login successful']);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}
