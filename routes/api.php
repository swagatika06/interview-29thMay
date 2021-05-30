<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonalDetailsController;


Route::post('/users/', [UserController::class, 'saveUser']);
Route::post('/userDetails/', [PersonalDetailsController::class, 'saveUserDetails']);
Route::get('/userDetails', [PersonalDetailsController::class, 'getUserDetails']);

Route::middleware('auth:api')->group( function () {
    Route::get('/userDetails', [PersonalDetailsController::class, 'getUserDetails']);
});


