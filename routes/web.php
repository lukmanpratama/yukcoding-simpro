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
    Route::get('/admin/pengguna', \App\Livewire\Admin\Pengguna::class)->name('admin.pengguna');
    Route::get('/admin/proyek', \App\Livewire\Admin\Proyek::class)->name('admin.proyek');
    Route::get('/admin/pembayaran', \App\Livewire\Admin\Pembayaran::class)->name('admin.pembayaran');
    Route::get('/admin/profile', \App\Livewire\Admin\Profile::class)->name('admin.profile');
    Route::get('/admin/profile/edit', \App\Livewire\Admin\ProfileEdit::class)->name('admin.profile.edit');
});
Route::group(['middleware' => ['auth', 'cekrole:manajer']], function(){
    Route::get('/manajer', \App\Livewire\Manajer\Beranda::class)->name('manajer.beranda');
    Route::get('/manajer/proyek', \App\Livewire\Manajer\Proyek::class)->name('manajer.proyek');
    Route::get('/manajer/profile', \App\Livewire\Manajer\Profile::class)->name('manajer.profile');
    Route::get('/manajer/profile/edit', \App\Livewire\Manajer\ProfileEdit::class)->name('manajer.profile.edit');
});
Route::group(['middleware' => ['auth', 'cekrole:tim']], function(){
    Route::get('/tim', \App\Livewire\Tim\Beranda::class)->name('tim.beranda');
    Route::get('/tim/proyek', \App\Livewire\Tim\Proyek::class)->name('tim.proyek');
    Route::get('/tim/profile', \App\Livewire\Tim\Profile::class)->name('tim.profile');
    Route::get('/tim/profile/edit', \App\Livewire\Tim\ProfileEdit::class)->name('tim.profile.edit');
});
Route::group(['middleware' => ['auth', 'cekrole:pemilik']], function(){
    Route::get('/pemilik', \App\Livewire\Pemilik\Beranda::class)->name('pemilik.beranda');
    Route::get('/pemilik/proyek', \App\Livewire\Pemilik\ProyekPemilik::class)->name('pemilik.proyek');
    Route::get('/pemilik/proyek/{id}', \App\Livewire\Pemilik\DetilProyek::class)->name('pemilik.detilproyek');
    Route::get('/pemilik/proyek/{id}/tugas', \App\Livewire\Pemilik\TugasProyek::class)->name('pemilik.tugas');
    Route::get('/pemilik/proyek/kalender', \App\Livewire\Pemilik\Kalender::class)->name('pemilik.kalender');
    Route::get('/pemilik/rapat', \App\Livewire\Pemilik\Rapat::class)->name('pemilik.rapat');
    Route::get('/pemilik/pembayaran', \App\Livewire\Pemilik\Pembayaran::class)->name('pemilik.pembayaran');
    Route::get('/pemilik/order', \App\Livewire\Pemilik\Order::class)->name('pemilik.order');
    Route::get('/pemilik/profile', \App\Livewire\Pemilik\Profile::class)->name('pemilik.profile');
    Route::get('/pemilik/profile/edit', \App\Livewire\Pemilik\ProfileEdit::class)->name('pemilik.profile.edit');
});

