<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountDetails extends Controller
{
    public function edit_account(Request $request)
    {
        // Retrieve user from the session
        $user = $request->session()->get('user');

        // If session is missing, redirect back to login
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please log in first.');
        }

        // Pass user data to the view
        return view('edit-account', compact('user'));
    }

    public function updateAccount(Request $request)
    {
        // Get the logged-in user from the session
        $user = $request->session()->get('user');

        if (!$user) {
            return back()->with('error', 'User not found.');
        }

        // Verify the current password (no hashing)
        if ($user->password !== $request->current_password) {
            return back()->with('error', 'Current password is incorrect.');
        }

        // Prepare data to update
        $updateData = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'display_name' => $request->display_name,
        ];

        // Check if a new password is provided and update it (without hashing)
        if ($request->new_password) {
            $updateData['password'] = $request->new_password;  // No hashing, saving plain text
        }

        // Update the user in the database
        try {
            $updated = DB::table('register_table')
                ->where('email_address', $user->email_address)
                ->update($updateData);

            if ($updated) {
                // Fetch the updated user data
                $user = DB::table('register_table')->where('email_address', $user->email_address)->first();

                // Update the session with the new user data
                session(['user' => $user]);

                // Redirect with success message
                return redirect()->route('edit-account')->with(['success' => 'Account updated successfully.', 'user' => $user]);
            } else {
                return back()->with('error', 'No changes were made.');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to update account. Please try again.');
        }
    }
}