<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directory_table;

class HomeController extends Controller
{
    //

    // public function index()
    // {
    //     return view("index");
    // }

    public function index()
    {
        // Home page ka view return karein (index.blade.php)
        return view('index');
    }


    public function register()
    {
        return view("register");
    }

    public function login()
    {
        return view("login");
    }
    // public function admin_dashboard(){
    //     return view("admin_dashboard");
    // }
    //public function edit_account(){
    //  return view("edit-account");

    //

    // If the session does not contain user data, redirect back to login
    //if (!$user) {
    // return redirect()->route('login')->with('error', 'Please log in first.');
    //}

    // Pass the user data to the dashboard view
    //return view('edit-account', compact('user'));
    //return view("edit-account");

    // Fetch the logged-in user's data from the session
    //  $user = session('user');

    //  // Pass user data to the view
    //  return view('edit-account', ['user' => $user]);

    // }

    public function directoryadd()
    {

        // $results = Directory_table::all(); 
        // or other relevant data

        // Pass the $results variable to the view
        // return view('directoryadd', compact('results'));

        // return view("directoryadd");

        // Initialize $results as an empty collection
        $results = collect(); // Or you can set it to null

        // Pass the empty $results variable to the view
        return view('directoryadd', compact('results'));
    }

    // Customizable Uniform 
    public function basketball()
    {
        return view('basketball');
    }
    public function cricket()
    {
        return view('cricket');
    }
    public function soccer()
    {
        return view('soccer');
    }
}
