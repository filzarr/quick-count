<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $binjai;
    private $langkat;
    private $karo;
    private $i = 0;
    private $j = 1;
    public function __construct(){
        $this->binjai = collect([
            'Binjai Kota',
            'Binjai Utara',
            'Binjai Selatan',
            'Binjai Barat',
            'Binjai Timur',
       
        ]);
        $this->langkat = collect([
            'Babalan',
            'Bahorok',
            'Batang Serangan',
            'Besitang',
            'Binjai',
            'Berandan Barat',
            'Gebang',
            'Hinai',
            'Kuala',
            'Kutambaru',
            'Padang Tualang',
            'Pangkalan Susu',
            'Pematang Jaya',
            'Salapian',
            'Sawit Seberang',
            'Secanggang',
            'Sei Binge',
            'Sei Lepan',
            'Selesai',
            'Sirapit',
            'Stabat',
            'Tanjung Pura',
            'Wampu'
        ]);

    }

    public function run(): void
    {
        for ($i=0; $i < $this->binjai->count() ; $i++) { 
                \App\Models\Kecamatan::create([
                    'id' => $this->j,
                    'kecamatan' => $this->binjai[$i] ,
                    'kota_id' => '1',
                ]);
                $this->j++;
            }
        for($i=0; $i < $this->langkat->count(); $i++){
            \App\Models\Kecamatan::create([
                'id' => $this->j,
                'kecamatan' => $this->langkat[$i] ,
                'kota_id' => '2',
            ]);
            $this->j++;
        }
    }
}
