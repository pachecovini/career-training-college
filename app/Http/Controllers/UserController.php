<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Method to handle user registration
    public function register(Request $request)
    {
        // Create a new instance of the User model
        $users = new User();

        // Assign the user's name from the request data to the model
        $users->name = $request->name;

        // Assign the user's email from the request data to the model
        $users->email = $request->email;

        // Hash the user's password and assign it to the model
        $users->password = Hash::make($request->password);

        // Save the user to the database
        $users->save();

        // Automatically log the user in after registration
        Auth::login($users);

        // Redirect the user to the index page after successful registration and login
        return redirect("/index");
    }

    // Method to handle user login
    public function login(Request $request)
    {
        // Create an array of credentials using the email and password from the request
        $credenciales = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        // Attempt to authenticate the user with the given credentials
        // The 'true' flag in the Auth::attempt method keeps the user logged in
        if (Auth::attempt($credenciales, true)) {
            // Regenerate the session ID to prevent session fixation attacks
            $request->session()->regenerate();

            // Redirect the user to the intended page or to the index page
            return redirect()->intended("/index");
        } else {
            // If authentication fails, redirect to the loginFail page
            return redirect("/loginFail");
        }
    }

    // Method to handle user logout
    public function logout(Request $request)
    {
        // Log the user out of the application
        Auth::logout();

        // Invalidate the user's session to prevent reuse
        $request->session()->invalidate();

        // Regenerate the session token to prevent CSRF attacks
        $request->session()->regenerateToken();

        // Redirect the user to the login page after logout
        return redirect("/login");
    }
}
