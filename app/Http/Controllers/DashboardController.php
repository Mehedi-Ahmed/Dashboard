<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = User::find($request->cookie('user_id'));
        return view('dashboard', compact('user')); // view in resources/views/dashboard.blade.php
    }
}
