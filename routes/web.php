<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/blog', [PortfolioController::class, 'blog'])->name('blog');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');