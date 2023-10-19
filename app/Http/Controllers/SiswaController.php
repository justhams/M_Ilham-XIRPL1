<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\siswa;
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\Facades\SweetAlert;
use RealRashid\SweetAlert\Facades\AlertManager;
use RealRashid\SweetAlert\Facades\SweetAlertManager;

class SiswaController extends Controller
{
    public function index() 
    {
        $siswa = Siswa::all(); // Menggunakan model Siswa
        return view("siswa.siswa", ["siswa" => $siswa]); // Mengganti "siswa.siswa" dengan "siswa.index"
    }

    public function create()
    {
        return view("siswa.create");
    }

    public function store(Request $request)
{
    // Validasi input
    $data = $request->validate([
        'nis' => 'required|max:25',
        'nama' => 'required|max:50',
        'tempat_lahir' => 'required|max:50',
        'tgl_lahir' => 'required|date',
        'alamat' => 'required|max:50',
        'email' => 'required|email|max:30',
        'no_telepon' => 'required|max:20',
        'jenis_kelamin' => 'required|max:15',
    ]);

    // Simpan data ke dalam database
    $newSiswa = siswa::create($data);

    // Redirect ke halaman yang sesuai
    return redirect()->route('siswa.siswa')->with('success', 'siswa Added    Successfully!');
}

    public function edit(siswa $siswa){
        return view('siswa.edit', ['siswa'=> $siswa]);
    }
    public function update(Siswa $siswa, Request $request){ 
        
        $data = $request->validate([
            'nis' => 'required|max:25',
            'nama' => 'required|max:50',
            'tempat_lahir' => 'required|max:50',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required|max:50',
            'email' => 'required|email|max:30',
            'no_telepon' => 'required|max:20',
            'jenis_kelamin' => 'required|max:15',
        ]);
    
        $siswa->update($data);
    
        return redirect()->route('siswa.siswa')->with('success', 'Siswa Updated Successfully');
    }
    
    public function destroy(Siswa $siswa){
        $siswa->delete();
        return redirect()->route('siswa.siswa')->with('success', 'siswa deleted Successfully!');
        
        
}
}