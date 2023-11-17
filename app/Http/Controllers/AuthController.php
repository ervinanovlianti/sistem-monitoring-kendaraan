<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'welcome'
        ]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'hak_akses' => 'atasan',
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        if (Auth::user()->hak_akses == 'admin') {
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in as admin!');
        }elseif (Auth::user()->hak_akses == 'atasan') {
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in as atasan!');
        }
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->hak_akses == 'admin') {
                return redirect()->route('dashboard-admin')
                    ->withSuccess('You have successfully logged in as admin!');
            }elseif (Auth::user()->hak_akses == 'atasan') {
                return redirect()->route('dashboard')
                    ->withSuccess('You have successfully logged in as atasan!');
            }
        }
        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');
    }
    

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    }

    
}
