<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

    #home
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
