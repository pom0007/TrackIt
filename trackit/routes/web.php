<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/auth');
});

Route::get('/track', function () {
    return view('track.index');
});

Route::get('/properties', function () {
    return view('properties.index');
});
Route::get('/cleaning', function () {
    return view('cleaning.index');
});

Route::get('/accounts', function () {
    return view('accounts.index');
});

Route::get('/garagesale', function () {
    return view('garagesale.index');
});

Route::get('/logs', function () {
    return view('logs.index');
});
Route::get('/auth', function () {
    return view('auth.index');
});
