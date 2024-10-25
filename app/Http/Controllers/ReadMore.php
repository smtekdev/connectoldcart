<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Directory_table;
use App\Models\Directory_table;

class ReadMore extends Controller
{
    public function readmore($id){

        


        $directory = Directory_table::findOrFail($id);

        // Data ko view mein pass karein
        return view('readmore', compact('directory'));
        
    }
}