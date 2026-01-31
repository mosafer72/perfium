<?php

use App\Http\Controllers\User\AddressController;
use App\Http\Controllers\User\OrderCotroller;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;
Route::prefix('user')->as('user.')->group( function () {
    Route::get('/profile', [ProfileController::class,"index"])->name("profile");
    Route::get('/orders', [OrderCotroller::class,"index"])->name("orders");
    Route::resource('address', AddressController::class);
});
