<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.list');
Route::get('/add-mahasiswa', [MahasiswaController::class, 'create'])->name('mahasiswa.add');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('edit.mahasiswa');
Route::post('/mahasiswa/edit/{id}', [MahasiswaController::class, 'update'])->name('update.mahasiswa');