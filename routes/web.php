<?php

use App\Http\Controllers\Mahasiswa\MahasiswaController;
use App\Http\Controllers\Mahasiswa\PdfController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('/', 'index')->name('mahasiswa');
    Route::post('/', 'store')->name('mahasiswa.store');
    Route::get('/mahasiswa/edit/{id}', 'edit')->name('mahasiswa.edit');
    Route::post('/mahasiswa/{id}', 'update')->name('mahasiswa.update');
    Route::delete('/mahasiswa/delete/jadwal/{id}', 'destroyJadwal')->name('mahasiswa.jadwal.destroy');
    Route::delete('/mahasiswa/delete/{id}', 'destroy')->name('mahasiswa.destroy');
});

Route::controller(PdfController::class)->group(function () {
    Route::get('/mahasiswa/jadwal/{id}', 'index')->name('mahasiswa.pdf');
    Route::get('/mahasiswa/jadwal/download/pdf/{id}', 'downloadPDF')->name('mahasiswa.download.pdf');
});
