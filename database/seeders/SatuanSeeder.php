<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kodesatuan' => 'Kg',
                'namasatuan' => 'kilogram'
            ],
            [
                'kodesatuan' => 'G',
                'namasatuan' => 'Gram'
            ],
            [
                'kodesatuan' => 'O',
                'namasatuan' => 'Ons'
            ],
        ]);
    }
}
