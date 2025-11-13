<?php

use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;
Route::get('/profile', [ProfileController::class,"index"])->name("user.profile")->middleware('auth')->name('dashboard');