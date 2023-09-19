<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register/Create Form
    public function register()
    {
        // Check if there are any users in the database
        $userCount = User::count();

        if ($userCount === 0) {
            // If there are no users in the database, allow registration without authentication
            return view('users.register');
        } else {
            // For logged-in users with ID 1, allow registration
            $loggedInUser = auth()->user();
            if ($loggedInUser && $loggedInUser->id === 1) {
                return view('users.register');
            }

            // For all other users, redirect to the login page
            return redirect('/login')->with('message', 'Access Denied.');
        }
    }

    //Create New User
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create User
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }
    //Logout User
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logged Out');
    }
    //Show login Form
    public function login()
    {
        
        return view('users.login');
    }

    //Authenticate User
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $user = auth()->user();

            // Check if the authenticated user has the user ID of 1
            if ($user && ($user->id === 1 || $user->id === 2 || $user->id === 3)) {
                $request->session()->regenerate();
                return redirect('/')->with('message', 'Logged in!');
            } else {
                auth()->logout();
                return back()->withErrors(['email' => 'Access denied. Invalid Credentials'])->onlyInput('email');
            }
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

}