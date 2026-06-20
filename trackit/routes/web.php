<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/track');
});

Route::get('/track', function () {
    return view('track.index');
});

Route::get('/properties', function () {
    return view('properties.index');
});