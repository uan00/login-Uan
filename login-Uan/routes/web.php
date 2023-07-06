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

// untuk data statis
Route::get('/', function () {
    return view('welcome');
});

Route::get('/awal', function () { 
    return view('index');
});

Route::get('/login-test', function () {
    return view('login');
});


// untuk autentikasi, jadi kalo mau ke page /home harus login terlebih dahulu 
// karena data yang ditampilkan data dinamis
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
