<?php

namespace Database\Seeders;

use App\Models\deskripsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Tentangseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            deskripsi::create([
            'id' => 1,
            'deskripsi_aplikasi' => 'Aplikasi PPDB SMKN 9 MALANG',
            'versi_aplikasi' => '1.0.0',
            'tanggal_buat' => '2026-03-02',
        ]);
    }
}
