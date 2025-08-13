<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function login() {
        return view('login'); // view in resources/views/login.blade.php
    }

    public function loginUser(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Cookie::queue('user_id', $user->id, 60*24); // 1 day
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function register() {
        return view('register'); // view in resources/views/register.blade.php
    }

    public function registerUser(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Cookie::queue('user_id', $user->id, 60*24);
        return redirect()->route('dashboard');
    }

    public function logout() {
        Cookie::queue(Cookie::forget('user_id'));
        return redirect()->route('login');
    }
}
