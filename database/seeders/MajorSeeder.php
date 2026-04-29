<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;

class MajorSeeder extends Seeder
{
    public function run(): void
    {
        Major::create([
            'nama_jurusan' => 'Teknik Komputer & Jaringan',
            'slug' => 'tkj',
            'deskripsi' => 'Mempelajari instalasi jaringan, server, dan perakitan komputer.',
        ]);

        Major::create([
            'nama_jurusan' => 'Akuntansi',
            'slug' => 'akuntansi',
            'deskripsi' => 'Fokus pada pengelolaan keuangan, pembukuan, dan perpajakan.',
        ]);
    }
}