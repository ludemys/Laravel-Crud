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


class User
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{page?}', [UserController::class, 'index']);
Route::get('/details', [UserController::class, 'details']);

Route::resource('/names', NameController::class);


// Route::get('/users', function () {
//     return view('user/list', array(
//         'title' => 'Users list',
//         'users' => [new User('admin', 45), new User('Luciano', 17), new User('Ricardo', 23)]
//     ));
// });

// Route::get('/users/adults', function () {

//     return view('user/adults', array(
//         'title' => 'Adult users list',
//         'users' => 
//     ));
// });

// Route::get('/generic', function () {
//     return view('page');
// });
