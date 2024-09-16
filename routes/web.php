<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.list');
Route::get('/add-mahasiswa', [MahasiswaController::class, 'create'])->name('mahasiswa.add');
Route::get('/', [HomeController::class, 'index'])->name('home');