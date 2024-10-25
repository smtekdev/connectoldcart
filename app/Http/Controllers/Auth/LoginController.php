<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the login form input
        $request->validate([
            'email_address' => 'required|email',
            'password' => 'required',
        ]);

        // Check if the login email belongs to a regular user first
        $user = DB::table('register_table')
            ->where('email_address', $request->email_address)
            ->first();

        // If no regular user found, check if it's an admin
        if (!$user) {
            // Retrieve admin from the 'admin' table
            $user = DB::table('admin')
                ->where('email_address', $request->email_address)
                ->first();

            if ($user && $user->password === $request->password) {
                // If it's an admin, store session and redirect to admin dashboard
                session(['user' => $user, 'role' => 'admin']); // Adding 'role' to session for differentiating
                return redirect()->route('admin_dashboard');
            }
        }

        // If a regular user is found and the password matches
        if ($user && $user->password === $request->password) {
            // Store session for regular user and redirect to home page
            session(['user' => $user, 'role' => 'regular']); // Adding 'role' to session for regular users
            return redirect()->route('index'); // Redirecting to home page
        }

        // If authentication fails, redirect back with an error
        return back()->with('error', 'Invalid email or password.');
    }



    // Regular user dashboard
    // public function dashboard()
    // {
    //     return view("dashboard");
    // }

    // Admin dashboard
    public function admin_dashboard()
    {
        return view("admin_dashboard");
    }
}