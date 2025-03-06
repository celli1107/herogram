<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login'); // Redirects to the login page when the app starts
});

Route::get('/login', function () {
    return view('Login'); // Loads the login page
})->name('login');

Route::post('/login', function () {
    return redirect()->route('Dashboard'); // Redirects to the dashboard on login button click
})->name('login.submit');

Route::get('/dashboard', function () {
    return view('Dashboard'); // Loads the dashboard page
})->name('Dashboard');
