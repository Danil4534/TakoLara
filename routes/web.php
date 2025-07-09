<?php

use App\Http\Controllers\NavController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavController::class, 'getHomePage']);
Route::get('/checkout', [NavController::class, 'getCheckout']);