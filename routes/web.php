<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('welcome');})->name('index');

Route::middleware('auth')->group(function () {
    Route::controller(HomeController::class)->group(function(){
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

    Route::controller(ProfileController::class)->name('profile.')->prefix('profile')->group(function () {
        Route::post('/profile_password/{profile}', 'profile_password')->name('password');
    });


    // Resource Controller
    Route::resource('/profile', ProfileController::class);
});



require __DIR__.'/auth.php';
