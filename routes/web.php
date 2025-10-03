<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/enterpriseResourcePlanning', function () {
    return view('enterpriseResourcePlanning');
})->name('enterpriseResourcePlanning');

Route::get('/internetConnection', function () {
    return view('internetConnection');
})->name('internetConnection');

Route::get('/webServerHosting', function () {
    return view('webServerHosting');
})->name('webServerHosting');

Route::get('/broadbandConnection', function () {
    return view('broadbandConnection');
})->name('broadbandConnection');

Route::get('/serverCoLocation', function () {
    return view('serverCoLocation');
})->name('serverCoLocation');

Route::get('/systemIntegratorService', function () {
    return view('systemIntegratorService');
})->name('systemIntegratorService');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
