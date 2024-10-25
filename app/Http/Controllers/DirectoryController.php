<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directory_table;
// Ensure your model's name is correct

use App\Exports\DirectoryExport;
use App\Imports\DirectoryImport1;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;


use PhpOffice\PhpSpreadsheet\IOFactory;










class DirectoryController extends Controller
{
    public function directory()
    {
        return view('directory');
    }

    //insert directory
    public function directory_store(Request $request)
    {
        // Validate the request fields (uncomment when needed)
        // $request->validate([
        //     'professional_or_business_name' => 'required|string|max:255',
        //     'email' => 'required|email',
        //     'cell_number' => 'required|string',
        //     'work_number' => 'nullable|string',
        //     'industry' => 'required|string',
        //     'website' => 'nullable|url',
        //     'education' => 'nullable|string',
        //     'experience' => 'nullable|string',
        //     'country' => 'required|string',
        //     'state' => 'required|string',
        //     'city' => 'required|string',
        //     'goods_or_services_provided' => 'nullable|string',
        //     'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);
        $userId = session('user');
        // dd($userId);

        if (!$userId) {
            // If there's no user in the session, redirect to login
            return redirect()->route('login')->with('error', 'You must be logged in to add a directory.');
        }

        //   Check if the user has already added a directory
        // $userId=$userId->user_id;
        // $userId = $userId->email;
        $userId = $userId->id;
        $existingDirectory = Directory_table::where('register_table_id', $userId)->first();


        if ($existingDirectory) {
            // If a directory already exists for this user, return a message
            return redirect()->route('directory')->with('error', 'You have already added a directory.');
        }

        // Handle file upload for profile picture
        $profile_picture = null;
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            if ($file->isValid()) {
                // Store file and get the path
                $profile_picture = $file->store('profile_pictures', 'public');
            }
        }

        // Create a new directory entry
        $data = new Directory_table;
        $data->register_table_id = $userId;
        $data->professional_or_business_name = $request->input('business_name');
        $data->email = $request->input('email');
        $data->cell_number = $request->input('cell_number');
        $data->building_number = $request->input('building_number');
        $data->industry = $request->input('industry');
        $data->website = $request->input('website');
        $data->education = $request->input('education');
        $data->experience = $request->input('experience');
        $data->country = $request->input('country');
        $data->state = $request->input('state');
        $data->city = $request->input('city');
        $data->street_address = $request->input('street_address');
        $data->goods_or_services_provided = $request->input('goods_services');

        // Save the profile picture filename if it exists
        $data->profile_picture = $profile_picture ? basename($profile_picture) : null;

        // Save the entry in the database
        $data->save();

        // Redirect to the directory page with a success message
        return redirect()->route('directory')->with('success', 'Directory inserted successfully.');
    }



    //show directory
    public function showAll()
    {
        // Fetch all records from the directory_table
        $directories = Directory_table::all();

        // Return a view and pass the fetched data
        return view('directory_show_all', compact('directories'));
    }


    //Search directory by categories
    public function directory_search(Request $request)
    {
        // Get search inputs
        $country = $request->input('country');
        $state = $request->input('state');
        $industry = $request->input('industry');

        // Build query based on search parameters
        $query = Directory_table::query();

        if ($country) {
            $query->where('country', 'like', '%' . $country . '%');
        }

        if ($state) {
            $query->where('state', 'like', '%' .    $state . '%');
        }

        if ($industry) {
            $query->where('industry', 'like', '%' . $industry . '%');
        }

        // Execute query and get results
        $results = $query->get();

        // Return a view with the search results
        return view('directoryadd', compact('results'));
    }

    //search directory by text
    public function search_bytext(Request $request)
    {
        // Get the search input
        $search = $request->input('search');

        // Initialize an empty query
        $query = Directory_table::query();

        // If search input is provided, search across relevant fields
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                // Search across multiple fields in the directory_table
                $q->where('professional_or_business_name', 'like', '%' . $search . '%')
                    ->orWhere('country', 'like', '%' . $search . '%')
                    ->orWhere('state', 'like', '%' . $search . '%')
                    ->orWhere('industry', 'like', '%' . $search . '%');
            });

            // Get results based on the search input
            $results = $query->get();
        } else {
            // If no search input is provided, return an empty collection
            $results = collect(); // Empty collection
        }

        // Return the view with the search results
        return view('directoryadd', compact('results'));
    }




    //Show Directories to admin (listing)
    public function Directotylisting()
    {
        // return view('admin_listing');

        // Fetch all records from the directory_table
        $directories = Directory_table::all();

        // Return a view and pass the fetched data
        return view('admin_listing', compact('directories'));
    }

    //Delect method of admin show directory
    public function delete($id)
    {
        // Find the record by its ID and delete it
        $directory = Directory_table::find($id);

        if ($directory) {  // Fix this variable name to match $directory
            $directory->delete();  // Delete the record
            return redirect()->route('admin_listing')->with('success', 'Directory entry deleted successfully.');
        } else {
            return redirect()->route('admin_listing')->with('error', 'Directory entry not found.');
        }
    }


    // download directory xlsx format


    public function downloadxlsx()
    {


        return Excel::download(new DirectoryExport, 'directory_data.xlsx');
    }

    // New upload method
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        Excel::import(new DirectoryImport1, $request->file('file'));

        return back()->with('success', 'Data imported successfully!');
    }
}
