<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogMiddleware;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;





Route::view('/', 'home.index')->name('home');

//guest
Route::middleware('guest')->group(function () {
    Route::get('login', LoginController::class)->name('login');
    Route::get('register', RegisterController::class)->name('register');
    
});

Route::get('heroes', HeroController::class)->name('heroes');
Route::get('hero/create', [HeroController::class, 'create'])->name('hero.create');

Route::get('test', TestController::class);


