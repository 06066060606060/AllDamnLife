<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('index');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/giveCards', function () {
    return view('giveCards');
});

Route::get('/account' ,[UsersController::class, 'profil']);
Route::post('account/{id}',[UsersController::class, 'updateProfil'])->whereNumber('id')->name('updateprofil');
Route::get('user/account/{id}',[UsersController::class, 'userProfil'])->whereNumber('id');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/users', [UsersController::class, 'getUsers'])->name('getUsers');
Route::post('users/{id}', [UsersController::class, 'update'])->whereNumber('id')->name('updateUsers');
Route::delete('delete/{id}', [UsersController::class, 'destroy'])->name('delete');
Route::get('user/{id}', [UsersController::class, 'showUsers'])->whereNumber('id')->name('readUsers');
Route::post('/actif/{id}', [UsersController::class,'activisor'])->whereNumber('id');
Route::get('/allusers', [AuthController::class, 'Allusers']);
Route::post('/comm/{id}', [ProductController::class, 'addComm'])->name('addComm');
Route::get('/deleteComm/{id}', [ProductController::class, 'deleteComm'])->name('deleteComm');



Route::get('/',[ProductController::class,'getProduct']);
Route::post('/filter',[ProductController::class,'getProduct']);

Route::get('/card/{id}',[ProductController::class,'getOneProduct'])->whereNumber('id')->name('getCard');
Route::post('/giftCards',[ProductController::class,'addProduct'])->name('addProduct');
Route::get('/giftCards',[ProductController::class,'getAllProducts'])->name('getAllProducts');
Route::post('/active/{id}', [ProductController::class,'activeur'])->whereNumber('id');
Route::post('/giftCards/{id}',[ProductController::class, 'updateProduct'])->whereNumber('id')->name('updateProduct');
Route::delete('/deleteCard/{id}', [ProductController::class, 'deleteCard'])->name('delete');


Route::get('/cart',[CartController::class,'getCart'])->name('cart');
Route::get('/addtocart/{id}',[CartController::class,'addtoCart'])->whereNumber('id');
Route::get('/deletefromcart/{id}',[CartController::class,'deletefromCart'])->whereNumber('id');

Route::get('/categories', [CategoriesController::class, 'getCateg'])->name('categories');
Route::post('/Updatecategorie/{id}', [CategoriesController::class, 'update'])->whereNumber('id');
Route::post('/Addcategorie', [CategoriesController::class, 'addCateg']);
Route::delete('/delete/{id}', [CategoriesController::class, 'destroy']);
