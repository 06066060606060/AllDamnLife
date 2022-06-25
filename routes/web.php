<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;



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

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/account', function () {
    return view('account');
});

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

route::get('/users', [UsersController::class, 'getUsers'])->name('getUsers');

route::post('users/{id}', [UsersController::class, 'update'])->whereNumber('id')->name('updateUsers');

route::delete('delete/{id}', [UsersController::class, 'destroy'])->name('delete');

route::get('user/{id}', [UsersController::class, 'showUsers'])->whereNumber('id')->name('readUsers');

Route::get('/', [ProductController::class, 'getProduct']);

Route::post('/actif/{id}', [UsersController::class, 'activisor']);

Route::get('/card/{id}', [ProductController::class, 'getOneProduct']);
