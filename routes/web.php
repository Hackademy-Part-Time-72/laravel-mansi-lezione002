<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
    //modificato
})->name('homepage');


Route::get('/dfgdfgdfgdfdgdfdf', function () {
    return view('about');
})->name('topolino');

Route::get('/servizi', function () {
    $services = ['siti', 'marketing', 'consulenza', 'ecommerce', 'hosting'];
    return view('services', ['services' => $services]);
})->name('services');

Route::get('/servizio/{name}', function ($name) {
    return view('service', ['service' => $name]);
});

Route::get('/prodotti', function () {
    $products = [
        ['name' => 'Scarpa nike', 'image' => '', 'number' => 42],
        ['name' => 'Scarpa Adidas', 'image' => '', 'number' => 45],
        ['name' => 'Scarpa Umbro', 'image' => '', 'number' => 32],
    ];
    return view('products', ['products' => $products]);
});

// Route::get('/profilo/{name}', function ($name) {
//     return view('profile', ['name' => $name]);
// });
