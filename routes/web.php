<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/map', function(){
    return view('templates.maps.map_uno');
});
