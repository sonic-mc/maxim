<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/products', 'products');
Route::view('/services', 'services');
Route::view('/plans', 'plans');
Route::view('/contact', 'contact');

