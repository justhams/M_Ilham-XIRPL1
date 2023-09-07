<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

Route::get('CV', function () {
    return view('cv');
});

Route::get('profile', function () {
    return view('profile_pplg');
});

use App\Http\Controllers\TestKoneksiController;

Route::get('/test-databases', [TestKoneksiController::class, 'testDatabase']);

