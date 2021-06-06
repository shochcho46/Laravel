<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainmenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubmenuController;

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
Route::get('/admin/usercreate', [AdminController::class, 'usercreate'])->middleware('admin')->name('admin.usercreate');
Route::post('/admin/usercreate/usercreate', [AdminController::class, 'addusertype'])->middleware('admin')->name('admin.addusertype');

//Admin User list Action
Route::get('/admin/getnormaluserlist', [AdminController::class, 'getnormaluserlist'])->name('admin.getnormaluserlist');
Route::get('/admin/getnormaluserblacklist', [AdminController::class, 'getnormaluserblacklist'])->name('admin.getnormaluserblacklist');

Route::get('/admin/getsubadminlist', [AdminController::class, 'getsubadminlist'])->name('admin.getsubadminlist');
Route::get('/admin/getsubadminblacklist', [AdminController::class, 'getsubadminblacklist'])->name('admin.getsubadminblacklist');

Route::get('/admin/getadminlist', [AdminController::class, 'getadminlist'])->middleware('admin')->name('admin.getadminlist');
Route::get('/admin/getadminblacklist', [AdminController::class, 'getadminblacklist'])->middleware('admin')->name('admin.getadminblacklist');



Route::put('/admin/blacklistuser/user/{user}', [AdminController::class, 'blacklistuser'])->name('admin.blacklistuser');
Route::patch('/admin/activeuser/user/{user}', [AdminController::class, 'activeuser'])->name('admin.activeuser');


Route::get('/admin/resetpass/user/{user}', [AdminController::class, 'loadrestpass'])->middleware('admin')->name('admin.loadrestpass');
Route::post('/admin/passresetconfirm/user/{user}', [AdminController::class, 'passresetconfirm'])->middleware('admin')->name('admin.passresetconfirm');
// Admin User End

//Main Menu Start

Route::get('/admin/mainmenu/create', [MainmenuController::class, 'create'])->name('mainmenu.create');
Route::get('/admin/mainmenu/list', [MainmenuController::class, 'index'])->name('mainmenu.index');
Route::get('/admin/mainmenu/{mainmenu}/edit', [MainmenuController::class, 'edit'])->name('mainmenu.edit');
Route::put('/admin/mainmenu/{mainmenu}', [MainmenuController::class, 'update'])->name('mainmenu.update');
Route::post('/admin/mainmenu/store', [MainmenuController::class, 'store'])->name('mainmenu.store');
Route::delete('/admin/mainmenu/{mainmenu}', [MainmenuController::class, 'destroy'])->name('mainmenu.destroy');

// Active Disable
Route::put('/admin/disable/mainmenu/{mainmenu}/', [MainmenuController::class, 'disable'])->name('mainmenu.disable');
Route::patch('/admin/active/mainmenu/{mainmenu}/', [MainmenuController::class, 'active'])->name('mainmenu.active');
Route::get('/admin/mainmenu/disablelist', [MainmenuController::class, 'disablelist'])->name('mainmenu.disableindex');
//Main Menu End

//Sub Menu Start

Route::get('/admin/submenu/create', [SubmenuController::class, 'create'])->name('submenu.create');
Route::get('/admin/submenu/list', [SubmenuController::class, 'index'])->name('submenu.index');
Route::get('/admin/submenu/{submenu}/edit', [SubmenuController::class, 'edit'])->name('submenu.edit');
Route::put('/admin/submenu/{submenu}', [SubmenuController::class, 'update'])->name('submenu.update');
Route::post('/admin/submenu/store', [SubmenuController::class, 'store'])->name('submenu.store');

//Active Disable

Route::put('/admin/disable/submenu/{submenu}/', [SubmenuController::class, 'disable'])->name('submenu.disable');
Route::patch('/admin/active/submenu/{submenu}/', [SubmenuController::class, 'active'])->name('submenu.active');
Route::get('/admin/submenu/disablelist', [SubmenuController::class, 'disablelist'])->name('submenu.disableindex');

//Sub Menu End
