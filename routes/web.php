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
Route::get('/portofolio', \App\Livewire\Guest\Portofolio::class)->name('guest.portofolio');

Route::get('/login', \App\Livewire\Auth\Login::class)->name('auth.login')->middleware('guest');
Route::get('/registrasi', \App\Livewire\Auth\Registrasi::class)->name('auth.registrasi')->middleware('guest');
Route::post('/logout', action: \App\Http\Controllers\LogoutController::class)->name('auth.logout');

Route::group(['middleware' => ['auth', 'cekrole:admin']], function(){
    Route::get('/admin', \App\Livewire\Admin\Beranda::class)->name('admin.beranda');
    Route::get('/admin/proyek', \App\Livewire\Admin\Proyek::class)->name('admin.proyek');
});
Route::group(['middleware' => ['auth', 'cekrole:manajer']], function(){
    Route::get('/manajer', \App\Livewire\Manajer\Beranda::class)->name('manajer.beranda');
    Route::get('/manajer/proyek', \App\Livewire\Manajer\Proyek::class)->name('manajer.proyek');
});
Route::group(['middleware' => ['auth', 'cekrole:tim']], function(){
    Route::get('/tim', \App\Livewire\Tim\Beranda::class)->name('tim.beranda');
    Route::get('/tim/proyek', \App\Livewire\Tim\Proyek::class)->name('tim.proyek');
});
Route::group(['middleware' => ['auth', 'cekrole:pemilik']], function(){
    Route::get('/pemilik', \App\Livewire\Pemilik\Beranda::class)->name('pemilik.beranda');
    Route::get('/pemilik/proyek', \App\Livewire\Pemilik\ProyekPemilik::class)->name('pemilik.proyek');
    Route::get('/pemilik/proyek/tugas', \App\Livewire\Pemilik\Tugas::class)->name('pemilik.tugas');
    Route::get('/pemilik/proyek/kalender', \App\Livewire\Pemilik\Kalender::class)->name('pemilik.kalender');
    Route::get('/pemilik/rapat', \App\Livewire\Pemilik\Rapat::class)->name('pemilik.rapat');
    Route::get('/pemilik/pembayaran', \App\Livewire\Pemilik\Pembayaran::class)->name('pemilik.pembayaran');
    Route::get('/pemilik/order', \App\Livewire\Pemilik\Order::class)->name('pemilik.order');
});

