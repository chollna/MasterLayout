<?php

use Illuminate\Support\Facades\Route;

// Route::get('/hh', function () {
//     return view('admin');
// });



// // routes/web.php
// Route::get('/', function () {
//     return view('home'); // This will render the home view which extends the master layout
// });







Route::get('/', function () {
    return view('dashboard'); // Loads the dashboard view
})->name('dashboard');
// routes/web.php
Route::get('/dashboard', function () {
    return view('dashboard'); // Loads the dashboard view
})->name('dashboard');

Route::get('/users', function () {
    return view('test'); // Load the users page
})->name('users.index');

Route::get('/setting', function () {
    return view('setting'); // Load the settings page
})->name('settings');
