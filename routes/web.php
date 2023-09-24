<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\VisitorController;

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
    //return view('welcome');
    //return view('auth.registration');
    return view('login');
});

Route::get('registration', [CustomAuthController::class, 'registration'])->name('registration');

Route::get('login', [CustomAuthController::class, 'index'])->name('login');

Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::get('/visitor', function () {
    return view('visitor');
});


Route::get('visitor/fetchall', [VisitorController::class, 'fetch_all'])->name('visitor.fetchall');