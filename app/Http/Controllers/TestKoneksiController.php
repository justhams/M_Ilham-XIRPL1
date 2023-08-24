<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestKoneksiController extends Controller
{
    public function testDatabase()
    {
        try {
            DB::connection()->getPdo();
            $message = "Koneksi ke database berhasil!";
        } catch (\Exception $e) {
            $message = "Gagal terhubung ke database: " . $e->getMessage();
        }

        return view('test-koneksi', ['message' => $message]);
    }
}
