<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
    //modificato
})->name('homepage');


Route::get('/chi-sono', function () {
    return view('about');
})->name('topolino');

Route::get('/servizi', function () {
    $services = ['siti', 'marketing', 'consulenza', 'ecommerce', 'hosting'];
    return view('services', ['services' => $services]);
})->name('services');

Route::get('/servizio/{name}', function ($name) {
    $services = ['siti', 'marketing', 'consulenza', 'ecommerce', 'hosting'];
    foreach ($services as $service) {
        if ($service == $name) {
            return view('service', ['service' => $name]);
        }
    }
    abort(404);
});

// Route::get('/prodotti', function () {
//     $products = [
//         ['name' => 'Scarpa nike', 'image' => '', 'number' => 42],
//         ['name' => 'Scarpa Adidas', 'image' => '', 'number' => 45],
//         ['name' => 'Scarpa Umbro', 'image' => '', 'number' => 32],
//     ];
//     return view('products', ['products' => $products]);
// });

// Route::get('/profilo/{name}', function ($name) {
//     return view('profile', ['name' => $name]);
// });
