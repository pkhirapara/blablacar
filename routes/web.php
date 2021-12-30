<?php

use App\Http\Controllers\RideController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/* Login */
Route::view('/login', 'pages.login');
Route::view('/signup', 'pages.signup');

/* Users */
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);

Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);

/* Rides */
Route::get('/rides', [RideController::class, 'index']);
Route::get('/rides/create', [RideController::class, 'create']);
Route::post('/rides', [RideController::class, 'store']);

Route::put('/rides/{ride}', [RideController::class, 'update']);
Route::delete('/rides/{rides}', [RideController::class, 'destroy']);

