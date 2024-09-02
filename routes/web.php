<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'dashboard');
Route::get('/team', 'team');
Route::get('/reports', 'reports');
Route::get('/calendar', 'calendar');
Route::get('/projects', 'projects');


Route::view('/register', 'register');
