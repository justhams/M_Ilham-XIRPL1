<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 25);
            $table->string('nama', 50);
            $table->string('tempat_lahir', 50);
            $table->date('tgl_lahir');
            $table->string('alamat', 50);
            $table->string('email', 30);
            $table->string('no_telepon', 20);
            $table->string('jenis_kelamin', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
