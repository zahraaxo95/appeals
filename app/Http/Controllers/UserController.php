<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
        public function edit(User $user)
        {
            return view('users.edit', compact('user'));
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

}
