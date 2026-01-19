<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    //modificato
});

Route::get('/chi-sono', function () {
    return view('about');
});

Route::get('/servizi', function () {
    return view('services');
});
