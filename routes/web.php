<?php

use App\Http\Controllers\SerkomController;
use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tiket', TiketController::class);

Route::get('/serkom', [SerkomController::class, 'tambahData']);
Route::get('/serkom/tampilData', [SerkomController::class, 'tampilData']);
Route::get('/serkom/hapusData/{id}', [SerkomController::class, 'hapusData']);