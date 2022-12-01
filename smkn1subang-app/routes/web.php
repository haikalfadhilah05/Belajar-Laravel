<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;

Route::redirect('/', '/home');
Route::get('/home', [HomeC::class, 'index']); 
Route::get('/pesertadidik', [HomeC::class, 'pesertadidik']);  
Route::get('/eskul', [HomeC::class, 'eskul']);  
Route::get('/prestasi', [HomeC::class, 'prestasi']);  
Route::get('/about', [HomeC::class, 'about']);  