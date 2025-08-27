<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/softwareDevelopment', function () {
    return view('softwareDevelopment');
})->name('softwareDevelopment');
