<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::view('/', 'home')->name('home');
Route::view('article', 'article')->name('article');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
