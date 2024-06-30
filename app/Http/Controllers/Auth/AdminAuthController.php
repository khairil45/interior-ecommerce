<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('auth.admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'name'     => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->hasRole('administrator')) {
                return redirect()->intended('admin');
            } elseif ($user->hasRole('user')) {
                return redirect()->intended('products');
            }
        }

        return redirect()->back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);
    }
}
