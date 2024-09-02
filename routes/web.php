<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/team', function () {
    return view('team');
});

Route::get('/reports', function () {
    return view('reports');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::view('/register', 'register');
