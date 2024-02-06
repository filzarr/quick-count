<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CalegSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $i,$j = 1;
    private $golkar;
    public function __construct(){
        $this->golkar = collect([
            "Ahmad Doli Kurnia Tandjung",
            "Delia Pratiwi Br. Sitepu, SH",
            "Capt. Dr. Anthon Sihombing",
            "Irama Angkat, S.Sos.I, M.Si",
            "Akhamd Johari Damanik, SH, MH",
            "Tumpal Sahala Pardomuan Sianipar, SE",
            "Mangihut Sinaga, SH, MH",
            "Dr. Ir. Osbal Saragi Rumahorbo, MM",
            "Fina Nazran, SH, M.Kn",
            "Mhd Chairul Idham Dalimunthe, SE",
        ]);

    }
    public function run(): void
    {

        for ($i=0; $i < $this->golkar->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->golkar[$i] ,
                'partai_id' => '1',
            ]);
            $this->j++;
        }
 
    }
}
