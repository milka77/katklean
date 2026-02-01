<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
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

// Site Routes for guests
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

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->group(function () {

  Route::get('/', [AdminController::class, 'index'])->name('admin.index');

  Route::get('/roles', [RoleController::class, 'index'])->name('admin.roles.index');
  Route::get('/roles/create', [RoleController::class, 'create'])->name('admin.roles.create');
  Route::post('/roles/store', [RoleController::class, 'store'])->name('admin.roles.store');
  Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('admin.roles.edit');
  Route::put('/roles/{role}/update', [RoleController::class, 'update'])->name('admin.roles.update');
  Route::delete('/roles/{role}/delete', [RoleController::class, 'destroy'])->name('admin.roles.destroy');
  Route::put('/users/{user}/role/attach', [AdminController::class, 'attach'])->name('user.role.attach');
  Route::put('/users/{user}/role/detach', [AdminController::class, 'detach'])->name('user.role.detach');  

  Route::get('/users', [AdminController::class, 'userIndex'])->name('admin.users.index');
  Route::get('/users/{user}/show', [AdminController::class, 'showUser'])->name('admin.users.show');

  Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');
  Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
  Route::post('/products/store', [ProductController::class, 'store'])->name('admin.products.store');
  Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
  Route::put('/products/{product}/update', [ProductController::class, 'update'])->name('admin.products.update');
  Route::delete('/products/{product}/delete', [ProductController::class, 'destroy'])->name('admin.products.destroy');
});