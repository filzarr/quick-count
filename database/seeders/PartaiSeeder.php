<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $i;
    private $partai;
    public function __construct(){
        $this->partai = collect([
            'PKB',
            'Gerindra',
            'PDI-P',
            'Golkar',
            'Nasdem',
            'Buruh',
            'Gelora',
            'PKS',
            'PKN',
            'Hanura',
            'Garuda',
            'PAN',
            'PBB',
            'Demokrat',
            'PSI',
            'Perindo',
            'PPP',
            'Ummat'
        ]);
    }
    public function run(): void
    {
        for ($i=0; $i < $this->partai->count(); $i++) { 
            \App\Models\Partai::create([
                'id' => $i + 1,
                'partai' => $this->partai[$i] ,
            ]);
        }
    }
}
