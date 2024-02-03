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
        \App\Models\Kota::create([
            'id' => '3',

            'Kota' => 'Karo',
        ]);
        \App\Models\Kota::create([
            'id' => '4',

            'Kota' => 'Dairi',
        ]);
        \App\Models\Kota::create([
            'id' => '5',
            'Kota' => 'Pakpak Bharat',
        ]);
        \App\Models\Kota::create([
            'id' => '6',
            'Kota' => 'Asahan',
        ]);
        \App\Models\Kota::create([
            'id' => '7',
            'Kota' => 'Batu Bara',
        ]);
        \App\Models\Kota::create([
            'id' => '8',
            'Kota' => 'Tanjungbalai',
        ]);
        \App\Models\Kota::create([
            'id' => '9',
            'Kota' => 'Simalungun',
        ]);
        \App\Models\Kota::create([
            'id' => '10',
            'Kota' => 'Pematangsiantar',
        ]);
    }
}
