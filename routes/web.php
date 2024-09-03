<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;

// Route for the home page, redirects to the login page
Route::view('/', '/login');

// Routes for user authentication (not protected by Sanctum)
Route::view('/login', "login")->name('login');
Route::view('/register', "register")->name('register');
Route::post('/validate-register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

// Route to handle user logout, protected by the 'auth:sanctum' middleware
Route::get('/logout', [UserController::class, 'logout'])
    ->middleware('auth:sanctum')
    ->name('logout');

// Routes for member-related actions, protected by 'auth:sanctum' middleware
Route::middleware('auth:sanctum')->group(function () {

    // Route to display the 'About' page
    Route::get('/about', function () {
        return view('about');
    });

    // Route to display the 'Events' page
    Route::get('/events', function () {
        return view('events');
    });

    // Route to display the form for creating a new member, protected by 'admin' middleware
    Route::get('/createmember', function () {
        return view('createmember');
    })->middleware('admin');

    // Route to store a new member
    Route::post('/members/add', [MemberController::class, 'store']);

    // Route to delete a member
    Route::delete('/{id}/delete', [MemberController::class, 'destroy']);

    // Route to display the form for editing a member
    Route::get('/{id}/edit', [MemberController::class, 'edit']);

    // Route to update a member's details
    Route::post('/{id}/update', [MemberController::class, 'update']);

    // Route to display the index page (protected by 'auth:sanctum' middleware)
    Route::get('/index', [MemberController::class, 'index'])->name('index');
});
