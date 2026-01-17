<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;


Route::get('/', [ContactController::class, 'index',])->name('home');
Route::get('/#about', [ContactController::class, 'index'])->name('about');
Route::get('/#contact', [ContactController::class, 'index'])->name('contact');
Route::get('/#faq', [ContactController::class, 'index'])->name('faq');
Route::get('/services', [SiteController::class, 'services'])->name('services');
// Route::get('/contact', [ContactController::class, 'showContact']);
Route::post('/', [ContactController::class, 'contactMessage']);
Route::get('/booking', [ContactController::class, 'booking'])->name('booking');