<?php

use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\MenuController;
use App\Http\Controllers\Web\ReservationController;
use App\Http\Controllers\Web\ReviewsController;
use Illuminate\Support\Facades\Route;


/*Home Page*/
Route::get('/', [HomeController::class, 'index'])->name('home');
/*Menu Page*/
Route::get('/menu', [MenuController::class, 'index'])->name('menu.page');
/*About Page*/
Route::get('/about', [AboutController::class, 'index'])->name('about.page');
/*Contact Page*/
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
/*Reservation Page*/
Route::group(['middleware' => ['web','auth']], function () {
    Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
    Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');
    Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews.index');
    Route::post('/review/store', [ReviewsController::class, 'store'])->name('reviews.store');


});

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__ . '/auth.php';
