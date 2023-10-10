<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Livewire\Guest\Beranda::class)->name('guest.beranda');
Route::get('/tentang', \App\Livewire\Guest\Tentang::class)->name('guest.tentang');
Route::get('/harga', \App\Livewire\Guest\Harga::class)->name('guest.harga');
