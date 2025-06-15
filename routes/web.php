<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::view('/', 'home')->name('home');
Route::view('article', 'article')->name('article');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
