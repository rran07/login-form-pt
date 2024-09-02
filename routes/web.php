<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionUserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard');
Route::view('/team', 'team');
Route::view('/projects', 'projects');
Route::view('/calendar', 'calendar');
Route::view('/reports', 'reports');


Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);


Route::get('/login', [SessionUserController::class, 'create']);
Route::post('/login', [SessionUserController::class, 'store']);

