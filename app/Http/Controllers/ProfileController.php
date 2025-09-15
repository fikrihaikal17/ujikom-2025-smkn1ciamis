<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  /**
   * Display the user's profile form.
   */
  public function edit(Request $request)
  {
    return view('profile.edit');
  }

  /**
   * Update the user's profile information.
   */
  public function update(Request $request)
  {
    // Basic validation simulation
    $name = $request->input('name');
    $email = $request->input('email');

    if (empty($name) || empty($email)) {
      return redirect()->back()->with('error', 'Name and email are required.');
    }

    // Simulate profile update
    return redirect()->route('profile.edit')->with('status', 'Profile updated successfully.');
  }

  /**
   * Delete the user's account.
   */
  public function destroy(Request $request)
  {
    // Simulate account deletion
    return redirect('/')->with('status', 'Account deleted successfully.');
  }
}
