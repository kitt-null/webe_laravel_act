<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
     return view('home');
})->name('home');

Route::get('/animation', function () {
    return view('animation');
})->name('animation');

Route::get('/tasks', function () {
    return view('tasks');
})->name('tasks');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');