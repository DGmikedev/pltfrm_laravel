<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsertadorValores;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/map', function(){
    return view('templates.maps.map_uno');
});

Route::get('/insert', function(){
    return view('templates.insert');
});

Route::get('/insertar_valores', [insertadorValores::class, 'insertar']);
