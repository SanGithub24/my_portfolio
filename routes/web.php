<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [PortfolioController::class, 'index']);
