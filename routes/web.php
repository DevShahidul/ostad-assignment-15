<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Created redirect route
Route::get('/home', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function(){
    return "Welcome to Dahsboard";
});

// Route::redirect('/home', '/dashboard', 302);
