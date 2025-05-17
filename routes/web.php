<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    MahasiswaController,
    DosenController,
    MataKuliahController,
    NilaiController,
    JadwalController
};

Route::apiResource('mahasiswa', MahasiswaController::class);
Route::apiResource('dosen', DosenController::class);
Route::apiResource('mata-kuliah', MataKuliahController::class);
Route::apiResource('nilai', NilaiController::class);
Route::apiResource('jadwal', JadwalController::class);


Route::apiResource('mahasiswa', MahasiswaController::class);

Route::get('/', function () {
    return view('welcome');
});
