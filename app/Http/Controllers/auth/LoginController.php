<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; 
use App\Models\User;
use App\Models\formateur;
use App\Models\admin;

class LoginController extends Controller
{
    public function login(Request $request)
{
    $input = $request->all();

    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Initialize user as null
    $user = null;
    $guard = null;

    // Check for the user in different tables
    if ($user = User::where('email', $input['email'])->first()) {
        $guard = 'web'; // default guard
    } elseif ($user = formateur::where('email', $input['email'])->first()) {
        $guard = 'formateur';
    } elseif ($user = admin::where('email', $input['email'])->first()) {
        $guard = 'admin';
    }

    // If user not found, return an error response
    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }

    // Authenticate the user with the appropriate guard
    if (Auth::guard($guard)->attempt(['email' => $request->email, 'password' => $request->password])) {
        // Get the table name associated with the user
        $userTableName = $user->getTable();

        // Store the table name in the session
            Session::put('user_table', $userTableName);
            Session::put('user_id', $user->id);

        // Redirect based on the type of user
        if ($user instanceof Admin) {
            return redirect('/index');
        } else {
            return redirect('/index');
        }
    } else {
        return redirect()->back()->withErrors(['error' => 'Email or Password are incorrect.']);
    }
}
}
