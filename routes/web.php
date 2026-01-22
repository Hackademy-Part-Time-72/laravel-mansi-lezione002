<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/chi-sono', [PageController::class, 'about'])->name('topolino');
Route::get('/servizi', [PageController::class, 'services'])->name('services');
Route::get('/servizio/{name}', [PageController::class, 'service']);

Route::get('/prodotti', [ProductController::class, 'products']);
Route::get('/prodotto/{name}', [ProductController::class, 'product']);
