<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

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


Route::post('/signin', [LoginController::class, 'authenticate'])->name('signin');
Route::post('/resetpassword', [LoginController::class, 'resetpassword'])->name('resetpassword');
Route::post('/confirmpass', [LoginController::class, 'confirmpass'])->name('confirmpass');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/forget', [LoginController::class, 'forget'])->name('forget');



//profile User Start

Route::get('/loadprofile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/updatepic', [ProfileController::class, 'profilepic'])->name('profiles.updatepic');
Route::post('/store', [ProfileController::class, 'store'])->name('profiles.store');
Route::put('/password', [ProfileController::class, 'password'])->name('profiles.password');

//profile User End

// Normal User Start

Route::get('/', [HomeController::class, 'index'])->name('normal.home');
Route::get('/signup', [HomeController::class, 'signup'])->name('normal.signup');
Route::get('/login', [HomeController::class, 'login'])->name('normal.login');
Route::post('/register', [HomeController::class, 'register'])->name('normal.register');


// Normal User End


// Register User Start

Route::get('/reguser/home', [RegUserController::class, 'index'])->name('register.home');

// Register User End


// Admin User Start

Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');

// Admin User End
