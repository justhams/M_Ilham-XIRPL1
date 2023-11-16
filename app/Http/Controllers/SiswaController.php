<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\siswa;
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\Facades\SweetAlert;
use RealRashid\SweetAlert\Facades\AlertManager;
use RealRashid\SweetAlert\Facades\SweetAlertManager;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;


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
        'nis' => 'required|max:25|unique:siswa,nis,',
        'nama' => 'required|max:50',
        'tempat_lahir' => 'required|max:50',
        'tgl_lahir' => 'required|date|before_or_equal:now',
        'alamat' => 'required|max:50',
        'email' => 'required|email|max:30',
        'no_telepon' => 'required|max:20',
        'jenis_kelamin' => 'required|max:15',
    ]);

    // Simpan data ke dalam database
    $newSiswa = siswa::create($data);

    // Redirect ke halaman yang sesuai
    Alert::success('Success', 'Data berhasil ditambahkan!');

    return redirect()->route('siswa.siswa'); // Gantilah 'route
}

    public function edit(siswa $siswa){
        return view('siswa.edit', ['siswa'=> $siswa]);
    }
    public function update(Siswa $siswa, Request $request){ 
    $data = $request->validate([
        'nis' =>[
            'required',
            'max:20',
            Rule::unique('siswa','nis')->ignore($siswa),

        ],
        'nama' => 'required|max:50',
        'tempat_lahir' => 'required|max:50',
        'tgl_lahir' => 'required|date|before_or_equal:now',
        'alamat' => 'required|max:50',
        'email' => 'required|email|max:30',
        'no_telepon' => 'required|max:20',
        'jenis_kelamin' => 'required|max:15',
    ]);

    // Check if the nis is unique in the table
    if (Siswa::where('nis', $data['nis'])->where('id', '!=', $siswa->id)->exists()) {
        return redirect()->route('siswa.siswa')->with('error', 'Integrity constraint violation: 1062 Duplicate entry. Please enter a unique value.');
    }

    $siswa->update($data);

    // Redirect ke halaman yang sesuai
    Alert::success('Success', 'Data berhasil edit!');

    return redirect()->route('siswa.siswa'); // Gantilah 'route
}
    
    public function destroy(Siswa $siswa)
{
    $siswa->delete();
    return redirect()->route('siswa.siswa')->with('success', 'Siswa deleted successfully!');
}

    public function show(Siswa $siswa)
{   
    // Assuming "Siswa" is your model name and you have a "show" view to display student details
    return view('siswa.show', ['siswa' => $siswa]);
}

}