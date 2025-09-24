<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});
Route::get('/mahasiswa/{param1}',[MahasiswaController::class,'show'] )->name('mahasiswa.show');
Route::get('/nama/{param1}/{Nim}', function ($param1='',$Nim='') {
    return 'Nama saya: '.$param1. '<br>Nim: '.$Nim;
});
Route::get('/about', function () {
    return view('halaman-about');
});
