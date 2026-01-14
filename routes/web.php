<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;


Route::get('/', [ContactController::class, 'index']);
Route::get('/#contact', [ContactController::class, 'index']);
// Route::get('/contact', [ContactController::class, 'showContact']);
Route::post('/', [ContactController::class, 'contactMessage']);
