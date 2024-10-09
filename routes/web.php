<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::prefix('projects')->name('projects.')->group(function () {
    Route::get('/main', [PortfolioController::class, 'showMain'])->name('main');
    Route::get('/pos', [PortfolioController::class, 'showPOS'])->name('pos');
    Route::get('/websites', [PortfolioController::class, 'showWebsites'])->name('websites');
    Route::get('/ui-designs', [PortfolioController::class, 'showUIDesigns'])->name('ui-designs');
});

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [PortfolioController::class, 'contact'])->name('contact');
});
