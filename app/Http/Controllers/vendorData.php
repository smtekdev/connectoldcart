<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register_table;
use Illuminate\Support\Facades\DB;

class vendorData extends Controller
{
    public function vendor_page(){
        return view('vendor_data');
    }
    public function showAll_data()
    {
        // Fetch all records from the 'directory_table'
        $Register = Register_table::all();

        // Return the view and pass the fetched data
        return view('vendor_data', compact('Register'));
    }

    // Delete a specific record from the directory_table
    public function delete($id)
    {
        // Find the record by its ID and delete it
        $Register = Register_table::find($id);

        if ($Register) {
            $Register->delete(); // Delete the record
            return redirect()->route('vendor_data')->with('success', 'Directory entry deleted successfully.');
        } else {
            return redirect()->route('vendor_data')->with('error', 'Directory entry not found.');
        }
    }
}