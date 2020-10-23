<?php

use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "v1"], function(){

    //Auth
    Route::group(["prefix" => "auth"], function(){
        Route::post("login", [\App\Http\Controllers\Api\AuthController::class, 'login'])->name('login');
        Route::get("token", [\App\Http\Controllers\Api\AuthController::class, "GetTokenOrRefreshToken"])->name("token");
    });

    //Profile
    Route::group(["prefix" => "profile", "middleware" => "jwt.verify"], function(){
        Route::get("", [\App\Http\Controllers\Api\AuthController::class, 'AuthenticatedUser'])->name('authenticated');
    });

});

