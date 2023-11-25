<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ HomeController::class, 'index' ]);
Route::get('/about', [ HomeController::class, 'aboutInfo' ]);
Route::get('/service', [ HomeController::class, 'servicesInfo' ]);
Route::get('/contact', [ HomeController::class, 'contactForm' ]);
Route::get('/portfolio', [ HomeController::class, 'portfolioInfo' ]);
