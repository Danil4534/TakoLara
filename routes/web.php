<?php

use App\Http\Controllers\NavController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavController::class, 'getHomePage'])->name('home.page');
Route::get('/checkout', [NavController::class, 'getCheckout']);
Route::get('/weapon', [NavController::class, 'getWeaponPage'])->name('weapon.page');
Route::get('/medkits', [NavController::class, 'getMedkitsPage'])->name('medkits.page');
Route::get('/radioset', [NavController::class, 'getRadioSetPage']);
Route::get('/drones', [NavController::class, 'getDronesPage'])->name('drones.page');
Route::get('/support', [NavController::class, 'getSupportPage'])->name('support.page');