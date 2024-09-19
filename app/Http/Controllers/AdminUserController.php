<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{



    public function index(Request $request)
    {
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }
    public function createUserForm()
    {
        return view('admin.create-user');
    }

    public function createUser(Request $request, User $user)
    {
        $user->create($request->all());
        return redirect()->route('dashboard')->with('success', 'User created successfully.');
    }
    public function edit(User $user)
    {
        return view('admin.update-user', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('dashboard')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('dashboard')->with('success', 'User deleted successfully.');
    }
/*
    public function update(Request $request, User $user)
    {
        // Validate user input
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id, // Exclude the current user's email from unique check
            'password' => 'nullable|min:6|confirmed', // Make password optional

            // Add more validation rules as needed
        ]);

        // Update user data
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        if ($request->has('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->type = $request->input('type');

        // Save the updated user data
        $user->save();

        // Redirect back to the user list page with a success message
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();

        // Redirect back to the user list page with a success message
        return redirect()->route('index')->with('success', 'User deleted successfully');
    }
    
    */
}
