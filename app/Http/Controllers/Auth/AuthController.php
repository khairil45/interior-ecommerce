<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->hasRole('administrator')) {
                return redirect()->intended('login');
            } elseif ($user->hasRole('user')) {
                return redirect()->intended('products');
            }
        }

        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function create()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name'                  => 'required|string|max:100',
            'email'                 => 'required|string|max:100|email|unique:users',
            'phone_number'          => 'required|string|max:15',
            'address'               => 'required|string|max:100',
            'postal_code'           => 'required|string|max:10',
            'is_whatsapp_connected' => 'boolean',
            'password'              => 'required|string|min:8|confirmed'
        ]);

        User::create([
            'name'                  => $validated['name'],
            'email'                 => $validated['email'],
            'phone_number'          => $validated['phone_number'],
            'address'               => $validated['address'],
            'postal_code'           => $validated['postal_code'],
            'is_whatsapp_connected' => $validated['is_whatsapp_connected'] ?? false,
            'password'              => Hash::make($validated['password']),
            'role'                  => 'user', // Default role
        ]);

        return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
