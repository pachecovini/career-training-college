<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;

// Route for the home page, redirects to the login page
Route::view('/', '/login');

// Routes for member-related actions, protected by the 'auth' middleware
Route::middleware('auth')->group(function () {
    // Route to view the member list
    Route::get('/index', [MemberController::class, 'index']);

    // Route to display the 'About' page
    Route::get('/about', function () {
        return view('about');
    });

    // Route to display the 'Events' page
    Route::get('/events', function () {
        return view('events');
    });

    // Route to display the form for creating a new member
    Route::get('/createmember', function () {
        return view('createmember');
    })->middleware('admin');

    // Route to store a new member
    Route::post('/members/add', [MemberController::class, 'store']);

    // Route to delete a member
    Route::delete('/{id}/delete', [MemberController::class, 'destroy'])->middleware('admin');

    // Route to display the form for editing a member
    Route::get('/{id}/edit', [MemberController::class, 'edit'])->middleware('admin');

    // Route to update a member's details
    Route::post('/{id}/update', [MemberController::class, 'update'])->middleware('admin');
});

// Routes for user authentication
// Route to display the login page
Route::view('/login', "login")->name('login');

// Route to display the registration page
Route::view('/register', "register")->name('register');

// Route to handle user registration
Route::post('/validate-register', [UserController::class, 'register']);

// Route to handle user login
Route::post('/start-section', [UserController::class, 'login']);

// Route to handle user logout, protected by the 'auth' middleware
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');
