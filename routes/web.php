<?php

use App\Http\Controllers\NavController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavController::class, 'getHomePage']);
Route::get('/checkout', [NavController::class, 'getCheckout']);
Route::get('/weapon', [NavController::class, 'getWeaponPage']);
Route::get('/medkits', [NavController::class, 'getMedkitsPage']);
Route::get('/radioset', [NavController::class, 'getRadioSetPage']);