<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/siswa', [SiswaController::class, 'index']);
// Route::get('/siswa', [SiswaController::class, 'all'])
//             ->name('tampilData');

// Route::get('/create', [SiswaController::class, 'create']);
// Route::post('/create', [SiswaController::class, 'store'])
//             ->name('tambahData');

Route::resource('/siswa', SiswaController::class);