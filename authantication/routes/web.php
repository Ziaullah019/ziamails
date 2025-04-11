<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/registration', function () {
//     return view('registration');
// });
Route::get('/login',[UserController::class, 'login'])->name('login.show');
Route::post('/login',[UserController::class, 'loginSave'])->name('login.save');
Route::get('/index',[UserController::class, 'index'])->name('index');


Route::get('/register',[UserController::class, 'registerShow'])->name('register');
Route::post('/register',[UserController::class, 'registerSave'])->name('register.save');
Route::get('/logout',[UserController::class, 'logout'])->name('logout');


// Route::get('/login',[AuthController::class, 'showlogin'])->name('login');
// Route::post('/login',[AuthController::class, 'login']);

// Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
