<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;


Route::get('/', [ContactController::class, 'index',])->name('home');
Route::get('/#contact', [ContactController::class, 'index'])->name('contact');
Route::post('/', [ContactController::class, 'contactMessage']);

Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/faq', [SiteController::class, 'faqs'])->name('faq');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/calculator', [SiteController::class, 'calculator'])->name('calculator');
Route::get('/terms', [SiteController::class, 'terms'])->name('terms');
Route::get('/policy', [SiteController::class, 'policy'])->name('policy');

Route::get('/booking', [ContactController::class, 'booking'])->name('booking');