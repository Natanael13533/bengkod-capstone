<?php

namespace Database\Seeders;

use App\Models\JwlMataKuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JwlMataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JwlMataKuliah::create([
            'matakuliah' => 'Dasar Pemrograman',
            'sks' => 3,
            'kelp' => 'A11.4201',
            'ruangan' => 'H.6.3'
        ]);

        JwlMataKuliah::create([
            'matakuliah' => 'Kalkulus',
            'sks' => 3,
            'kelp' => 'A11.4201',
            'ruangan' => 'H.6.3'
        ]);

        JwlMataKuliah::create([
            'matakuliah' => 'Algoritma dan Pemrograman',
            'sks' => 4,
            'kelp' => 'A11.4205',
            'ruangan' => 'H.5.6'
        ]);

        JwlMataKuliah::create([
            'matakuliah' => 'Rangkaian Logika Digital',
            'sks' => 2,
            'kelp' => 'A11.4565',
            'ruangan' => 'H.5.3'
        ]);

        JwlMataKuliah::create([
            'matakuliah' => 'Basis Data',
            'sks' => 3,
            'kelp' => 'A11.4210',
            'ruangan' => 'H.5.9'
        ]);
    }
}
