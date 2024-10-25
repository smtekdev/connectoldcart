<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register_table;

class register extends Controller
{
    public function store(Request $request){
        // echo "<pre>";
        // print_r($request->all());
        $emailExists = Register_table::where('email_address', $request->input('email_address'))->exists();

        if ($emailExists) {
            // Redirect back with a custom message
            return redirect()->back()->with('error', 'This email is already registered.');
        }
         $data =new Register_table;
         $data->email_address = $request ['email_address'];
         $data->password = $request ['password'];

         $data->save();

         // Redirect to the login page with a success message
         return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
     
         
        
        
    }
   
}