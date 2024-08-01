<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Fetch user data from database
        $user = DB::table('users')->where('username', $username)->first();

        if ($user && $user->password === $password) {
            // Start session and redirect to dashboard
            session(['username' => $username]);
            return redirect('/dashboard');
        } else {
            // Authentication failed
            return redirect('/login')->with('error', 'Invalid credentials');
        }
    }

    public function logout()
    {
        // Clear session
        session()->forget('username');
        return redirect('/login');
    }
}
