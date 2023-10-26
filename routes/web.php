<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\SiswaController;



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


Route::get('/test-database', function () {
    try {
        DB::connection()->getPdo();
        return "Koneksi ke database berhasil!";
    } catch (\Exception $e) {
        return "Gagal terhubung ke database: " . $e->getMessage();
    }
});

Route::get('/cv', function () {
    return view ('cv');
});



Route::get('/profile', [SiswaController::class,'profile_pplg']);

Route::get('profile', function () {
    return view('profile_pplg');
});

use App\Http\Controllers\TestKoneksiController;

Route::get('/test-databases', [TestKoneksiController::class, 'testDatabase']);

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.siswa');   
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');   
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store'); 
Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{siswa}/update', [SiswaController::class, 'update'])->name('siswa.update'); 
Route::get('/siswa/{siswa}/destroy', [SiswaController::class, 'destroy'])->name('siswa.destroy'); 
Route::get('/siswa/{siswa}/show/', [SiswaController::class,'show'])->name('siswa.show');





