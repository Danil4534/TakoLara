<?php

use App\Http\Controllers\NavController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavController::class, 'getHomePage'])->name('home.page');
Route::get('/checkout', [NavController::class, 'getCheckout']);
Route::get('/weapon', [NavController::class, 'getWeaponPage'])->name('weapon.page');
Route::get('/medkits', [NavController::class, 'getMedkitsPage'])->name('medkits.page');
Route::get('/radioset', [NavController::class, 'getRadioSetPage'])->name('radio.page');
Route::get('/drones', [NavController::class, 'getDronesPage'])->name('drones.page');
Route::get('/support', [NavController::class, 'getSupportPage'])->name('support.page');
Route::post('/contactForm', [ContactFormController::class, 'submitContactDataPost'])->name('contactFormSubmit');
Route::get('/reb', [NavController::class, 'getRebPage'])->name('reb.page');
Route::get('/success', [NavController::class, 'getSuccessPage'])->name('success.page');
Route::post('/addToCart',[ProductController::class,'addToCard'])->name('addProduct.to.cart');