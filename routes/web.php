<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;


Route::get('/', [ContactController::class, 'index',])->name('home');
Route::get('/#contact', [ContactController::class, 'index'])->name('contact');
Route::post('/', [ContactController::class, 'contactMessage']);

// AUTH ROUTES
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/signup', [UserController::class, 'signup'])->name('signup');
Route::post('/signup', [UserController::class, 'store'])->name('auth.store');

Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/faq', [SiteController::class, 'faqs'])->name('faq');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/calculator', [SiteController::class, 'calculator'])->name('calculator');
Route::get('/terms', [SiteController::class, 'terms'])->name('terms');
Route::get('/policy', [SiteController::class, 'policy'])->name('policy');

Route::get('/booking', [ContactController::class, 'booking'])->name('booking');

Route::middleware('auth')->group(function() {
  Route::post('/logout', [UserController::class, 'logout'])->name('logout');
  Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
  Route::get('/address/create', [AddressController::class, 'create'])->name('address.create');
  Route::post('/address/store', [AddressController::class, 'store'])->name('address.store');
  Route::get('/address/{address}/edit', [AddressController::class, 'edit'])->name('address.edit');
  Route::put('/address/{address}/update', [AddressController::class, 'update'])->name('address.update');
  Route::delete('/address/{address}/delete', [AddressController::class, 'destroy'])->name('address.destroy');
});