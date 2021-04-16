<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
| API Routes for 'Environments'
*/
Route::get('/ambientes',  [App\Http\Controllers\ApiController::class, 'environments'])->name('environments');
Route::get('/ambiente/{environment}',  [App\Http\Controllers\ApiController::class, 'environment'])->name('environment');

/*
| API Routes for 'Products Categories'
*/
Route::get('/categorias',  [App\Http\Controllers\ApiController::class, 'categories'])->name('categories');
Route::get('/categorias/{category}', [App\Http\Controllers\ApiController::class, 'category'])->name('category');
