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

Route::group(['prefix' => '/users'], function () {

    Route::get('/details/{id}', [UserController::class, 'details'])
        ->name('users.details');

    Route::get('/redirect/{year?}', [UserController::class, 'redirect'])
        ->name('users.redirect')
        ->middleware('testyear');

    Route::get('/create', [UserController::class, 'create'])
        ->name('users.create');

    Route::get('/{page?}', [UserController::class, 'index'])
        ->name('users.index');


    Route::post('/register', [UserController::class, 'register'])
        ->name('users.register');

    Route::delete('/delete/{id}', [UserController::class, 'delete'])
        ->name('users.delete');

    Route::put('/update_password/{id}', [UserController::class, 'update_password'])
        ->name('users.update_password');
});

Route::resource('/names', NameController::class);
