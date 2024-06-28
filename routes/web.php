<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\koperasiController;
use App\Http\Controllers\SessionControl;

//bagian login
Route::middleware(['guest'])->group(function(){
    Route::get('/', [SessionControl::class, 'beranda'])->name('login');
    Route::get('/login', [SessionControl::class, 'login'])->name('login');
    Route::post('/fungsiLogin', [SessionControl::class, 'fungsiLogin']);
});
Route::get('/register', [SessionControl::class, 'register']);
Route::post('/create', [SessionControl::class, 'create']);


Route::get('/home', function(){
    return redirect('/dashboardPengawas');
});

//autentikasi pengawas dan pengurus
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboardPengawas', [koperasiController::class, 'dashboardPengawas'])->middleware('userAkses:Dewan_Pengawas');
    Route::get('/RUID', [koperasiController::class, 'RUID'])->middleware('userAkses:Dewan_Pengawas');
    Route::get('/laporan', [koperasiController::class, 'laporan'])->middleware('userAkses:Dewan_Pengawas');
    Route::get('/perubahan', [koperasiController::class, 'perubahan'])->middleware('userAkses:Dewan_Pengawas');

    //pengurus
    Route::get('/dashboardPengurus', [koperasiController::class, 'dashboardPengurus'])->middleware('userAkses:Pengurus');
    Route::get('/profilPengurus', [koperasiController::class, 'profilPengurus'])->middleware('userAkses:Pengurus');
    Route::get('/anggotaBaru', [koperasiController::class, 'anggotaBaru'])->middleware('userAkses:Pengurus');
    Route::post('/createAnggota', [koperasiController::class, 'createAnggota'])->middleware('userAkses:Pengurus');
    Route::get('/anggotaDone', [koperasiController::class, 'anggotaDone'])->middleware('userAkses:Pengurus');
    Route::get('/transaksi', [koperasiController::class, 'transaksi'])->middleware('userAkses:Pengurus');
    Route::get('/agenda', [koperasiController::class, 'agenda'])->middleware('userAkses:Pengurus');
    Route::get('/dokumen', [koperasiController::class, 'dokumen'])->middleware('userAkses:Pengurus');

    Route::get('/kegiatan', [koperasiController::class, 'kegiatan'])->middleware('userAkses:Pengurus');
    Route::get('/koperasi', [koperasiController::class, 'koperasi'])->middleware('userAkses:Pengurus');
    Route::get('/perhitunganSHU', [koperasiController::class, 'perhitunganSHU'])->middleware('userAkses:Pengurus');
    Route::get('/aset', [koperasiController::class, 'aset'])->middleware('userAkses:Pengurus');

    Route::get('/logout', [SessionControl::class, 'logout']);
});

//bagian profil
Route::get('/home', [koperasiController::class, 'home']);
Route::get('/sambutan', [koperasiController::class, 'sambutan']);
Route::get('/sejarah', [koperasiController::class, 'sejarah']);
Route::get('/struktur', [koperasiController::class, 'struktur']);
Route::get('/fasilitas', [koperasiController::class, 'fasilitas']);
Route::get('/peta', [koperasiController::class, 'peta']);

//anggota
Route::get('/anggotaProfil', [koperasiController::class, 'anggotaProfil']);
Route::get('/editAnggota', [koperasiController::class, 'editAnggota']);
Route::get('/pengajuan', [koperasiController::class, 'pengajuan']);
Route::get('/angsuran', [koperasiController::class, 'angsuran']);
Route::get('/setor', [koperasiController::class, 'setor']);
Route::get('/SHU', [koperasiController::class, 'SHU']);
