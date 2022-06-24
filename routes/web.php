<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;


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
    return view('index');
});

// Route::get('/users', function () {
//     return view('users');
// });

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/giveCards', function () {
    return view('giveCards');
});

Route::get('card',function (){
    return view('card');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/account', function () {
    return view('account');
});



Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');


route::get('/users', [UsersController::class, 'getUsers'])->name('getUsers');
route::post('users/{id}', [UsersController::class, 'update'])->whereNumber('id')->name('updateUsers');
route::delete('delete/{id}', [UsersController::class,'destroy'])->name('delete');
route::get('user/{id}', [UsersController::class, 'showUsers'])->whereNumber('id')->name('readUsers');