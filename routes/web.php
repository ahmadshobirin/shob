<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('detail-blog');
});
Auth::routes(["login"]);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

