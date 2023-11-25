<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/profile/{id}', [ProfileController::class, 'index']);
Route::get('/log/{name}/{age}', [LogController::class, 'getLogInfo']);