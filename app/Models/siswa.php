<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'nis',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'email',
        'no_telepon',
        'jenis_kelamin'
    ];  
}
