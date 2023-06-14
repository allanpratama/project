<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kodebarang' => 'S01',
                'namabarang' => 'Jaket',
                'hargabarang' => 150000,
                'deskripsibarang' => 'Jaket lengan panjang',
                'satuan_id' => 1,
            ],
            [
                'kodebarang' => 'S02',
                'namabarang' => 'Lampu',
                'hargabarang' => 10000,
                'deskripsibarang' => 'Lama',
                'satuan_id' => 2,
            ],
            [
                'kodebarang' => 'S03',
                'namabarang' => 'Sepatu',
                'hargabarang' => 200000,
                'deskripsibarang' => 'Baru',
                'satuan_id' => 3,
            ],
        ]);
    }
}
