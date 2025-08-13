<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class CookieAuth
{
    public function handle(Request $request, Closure $next)
    {
        $userId = $request->cookie('user_id');

        if (!$userId || !User::find($userId)) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
