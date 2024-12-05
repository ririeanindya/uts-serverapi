<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServerController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/servers', [ServerController::class, 'index']);
Route::get('/pelanggans', [PelangganController::class, 'index']);