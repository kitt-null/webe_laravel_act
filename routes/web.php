<?php

use App\Http\Controllers\AnimationController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TasksController;
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

// Route::get('/', function () {
//      return view('home');
// })->name('home');
Route::get('/',[HomeController::class,'index'])->name('home');

// Route::get('/animation', function () {
//     return view('animation');
// })->name('animation');
Route::get('/animation',[AnimationController::class,'index'])->name('animation');

// Route::get('/tasks', function () {
//     return view('tasks');
// })->name('tasks');
Route::get('/tasks',[TasksController::class,'index'])->name('tasks');

// Route::get('/profile', function () {
//     return view('profile');
// })->name('profile');
Route::get('/profile',[ProfileController::class,'index'])->name('profile');

// Route::get('/contactus', function () {
//     return view('contactus');
// })->name('contactus');
Route::get('/contactus',[ContactUsController::class,'index'])->name('contactus');