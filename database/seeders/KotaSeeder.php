<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Kota::create([
            'id' => '1',

            'Kota' => 'Binjai',
        ]);
        \App\Models\Kota::create([
            'id' => '2',

            'Kota' => 'Langkat',
        ]);

    }
}
