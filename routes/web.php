<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/programs', [PageController::class, 'programs'])->name('programs');
Route::get('/results', [PageController::class, 'results'])->name('results');
Route::get('/resources', [PageController::class, 'resources'])->name('resources');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');
