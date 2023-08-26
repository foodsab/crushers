<?php

use Illuminate\Support\Facades\Route;



Route::prefix('user')->middleware('auth')->group(function () {
    
    Route::get('/')->name('user');
    
});
