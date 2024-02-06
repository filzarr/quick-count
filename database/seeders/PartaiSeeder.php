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
 
            'Golkar'
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
