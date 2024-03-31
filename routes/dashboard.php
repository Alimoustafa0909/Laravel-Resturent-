<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\ChefsController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;


Route::view('/admin/login-form', 'auth.admin_login')->name('admin.login.form');
Route::post('/admin/login', [AuthController::class, 'AdminLogin'])->name('admin.login');


Route::group(['as' => 'dashboard.', 'middleware' => ['web','auth:admin']], function () {

    Route::view('/dashboard', 'dashboard.index');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::resource('admins', AdminController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('abouts', AboutController::class);
    Route::resource('chefs', ChefsController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('sliders', SliderController::class);

});

