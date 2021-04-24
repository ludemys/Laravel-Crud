<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NameController;

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
    return view('welcome');
});

Route::get('/users/details/{id}', [UserController::class, 'details'])->name('users.details');
Route::get('/users/{page?}', [UserController::class, 'index'])->name('users.index');
Route::get('/redirect/{id}', [UserController::class, 'redirect'])->name('users.redirect');

Route::resource('/names', NameController::class);
