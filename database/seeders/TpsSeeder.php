<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $tps;
    private $z,$j,$i = 1;
    private $babalan,$batangserangan,$laubaleng,$bahorok,$besitang,$binjai,$brandanbarat,$gebang,$hinai,$kuala,$kuatambaru,$pangkalasusu,$pematangjaya,$salapian,$sawitseberang,$secanggang,$seibinge,$seilepan,$selesai,$sirapit,$stabat,$tanjungpura,$wampu, $binjaibarat, $binjaikota,$binjaiselatan,$binjaitimur,$binjaiutara,$barusjahe,$berastagi,$dolarakyat,$juhar,$kabanjahe,$kutabuluh,$mardingding,$merdeka,$merek,$munte,$namateran,$payung,$simpangempat,$tigabinanga,$tiganderket,$tigapanah;
 
    public function __construct(){
        // Kabupaten Binjai
        $this->binjaibarat = collect([
            19,
            22,
            22,
            30,
            24,
            27,      
        ]);
        $this->binjaikota = collect([
            28,
            9,
            10,
            16,
            10,
            14,
            10,
        ]);
        $this->binjaiselatan = collect([
            17,
            42,
            22,
            11,
            16,
            9,
            20,
            24,
        ]);
        $this->binjaitimur = collect([
            15,
            27,
            35,
            35,
            19,
            16,
            29,
        ]);
        $this->binjaiutara = collect([
            37,
            19,
            29,
            28,
            34,
            10,
            16,
            29,
            32,       
        ]);



        // Kabupaten Langkat
        $this->babalan = collect([
            19,
            17,
            20,
            27,
            28,
            24,
            30,
            34,
        ]);
        $this->bahorok = collect([
            5,
            7,
            6,
            11,
            7,
            3,
            2,
            2,
            5,
            7,
            4,
            6,
            5,
            7,
            5,
            9,
            11,
            13,
            6,
        ]);
        $this->batangserangan = collect([
            12,
            9,
            14,
            17,
            5,
            27,
            12,
            13,
        ]);
        $this->besitang = collect([
            18,
            15,
            16,
            24,
            10,
            21,
            9,
            12,
            7,      
            
        ]);
        $this->binjai = collect([
            14,
            20,
            22,
            20,
            25,
            12,
            20,
        ]);
        $this->brandanbarat = collect([
            4,
            10,
            9,
            12,
            13,
            6,
            12,
        ]);
        $this->gebang = collect([
            27,
            3,
            9,
            5,
            9,
            17,
            17,
            6,
            9,
            26,
            8,
        ]);
        $this->hinai = collect([
            12,
            23,
            21,
            9,
            12,
            12,
            11,
            6,
            11,
            10,
            12,
            4,
            13,
        ]);
        $this->kuala = collect([
            7,
            7,
            21,
            5,
            7,
            6,
            4,
            6,
            10,
            6,
            21,
            4,
            8,
            3,
            5,
            4,
        ]);
        $this->kutambaru = collect([
            3,
            8,
            12,
            10,
            6,
            6,
            4,
            2,      
        ]);
        $this->padangtualang = collect([
            9,
            16,
            3,
            10,
            11,
            12,
            9,
            6,
            11,
            22,
            25,
            25,
        ]);
        $this->pangkalansusu = collect([
            11,
            25,
            16,
            10,
            8,
            6,
            13,
            6,
            6,
            14,
            13,
        ]);
        $this->pematangjaya = collect([
            5,
            4,
            8,
            2,
            3,
            10,
            7,
            5,
        ]);
        $this->salapian = collect([
            3,
            2,
            5,
            6,
            12,
            5,
            6,
            4,
            3,
            4,
            2,
            2,
            9,
            11,
            6,
            4,
            6,  
        ]);
        $this->sawitseberang = collect([
            11,
            6,
            22,
            13,
            10,
            17,
            7,
        ]);
        $this->secanggang = collect([
            3,
            15,
            9,
            17,
            17,
            9,
            16,
            4,
            10,
            7,
            20,
            12,
            15,
            8,
            15,
            16,
            17,
        ]);
        $this->seibinge = collect([
            13,
            6,
            11,
            7,
            5,
            9,
            16,
            9,
            13,
            9,
            10,
            11,
            6,
            4,
            6,
            9,
        ]);
        $this->seilepan = collect([
            25,
            9,
            6,
            8,
            16,
            7,
            8,
            7,
            13,
            2,
            2,
            30,
            11,
            13,
        ]);
        $this->selesai = collect([
            13,
            6,
            8,
            10,
            12,
            4,
            34,
            27,
            33,
            10,
            21,
            14,
            11,
            8,
        ]);
        $this->sirapit = collect([
            8,
            6,
            6,
            3,
            6,
            6,
            4,
            3,
            7,
            5,
        ]);
        $this->stabat = collect([
            20,
            16,
            19,
            29,
            24,
            32,
            9,
            24,
            12,
            37,
            17,
            20,
        ]);
        $this->tanjungpura = collect([
            7,
            9,
            7,
            4,
            5,
            7,
            20,
            8,
            36,
            16,
            29,
            5,
            9,
            9,
            9,
            4,
            9,
            6,
            12,
        ]);
        $this->wampu = collect([
            13,
            8,
            3,
            4,
            11,
            16,
            11,
            12,
            6,
            6,
            18,
            20,
            13,
            6,
        ]);


    }
    public function run(): void
    {
        
        for ($j=0; $j < $this->binjaibarat->count() ; $j++) { 
            for ($z=0; $z <$this->binjaibarat[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->binjaikota->count() ; $j++) { 
            for ($z=0; $z <$this->binjaikota[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->binjaiselatan->count() ; $j++) { 
            for ($z=0; $z <$this->binjaiselatan[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->binjaiutara->count() ; $j++) { 
            for ($z=0; $z <$this->binjaiutara[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->binjaitimur->count() ; $j++) { 
            for ($z=0; $z <$this->binjaitimur[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }

        // Langkat Running Data
        for ($j=0; $j < $this->babalan->count() ; $j++) { 
            for ($z=0; $z <$this->babalan[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->bahorok->count() ; $j++) { 
            for ($z=0; $z <$this->bahorok[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->batangserangan->count() ; $j++) { 
            for ($z=0; $z <$this->batangserangan[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->besitang->count() ; $j++) { 
            for ($z=0; $z <$this->besitang[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->binjai->count() ; $j++) { 
            for ($z=0; $z <$this->binjai[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->brandanbarat->count() ; $j++) { 
            for ($z=0; $z <$this->brandanbarat[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->gebang->count() ; $j++) { 
            for ($z=0; $z <$this->gebang[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->hinai->count() ; $j++) { 
            for ($z=0; $z <$this->hinai[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->kuala->count() ; $j++) { 
            for ($z=0; $z <$this->kuala[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->kutambaru->count() ; $j++) { 
            for ($z=0; $z <$this->kutambaru[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->padangtualang->count() ; $j++) { 
            for ($z=0; $z <$this->padangtualang[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->pangkalansusu->count() ; $j++) { 
            for ($z=0; $z <$this->pangkalansusu[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->pematangjaya->count() ; $j++) { 
            for ($z=0; $z <$this->pematangjaya[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->salapian->count() ; $j++) { 
            for ($z=0; $z <$this->salapian[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->sawitseberang->count() ; $j++) { 
            for ($z=0; $z <$this->sawitseberang[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->secanggang->count() ; $j++) { 
            for ($z=0; $z <$this->secanggang[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->seibinge->count() ; $j++) { 
            for ($z=0; $z <$this->seibinge[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->seilepan->count() ; $j++) { 
            for ($z=0; $z <$this->seilepan[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->selesai->count() ; $j++) { 
            for ($z=0; $z <$this->selesai[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->sirapit->count() ; $j++) { 
            for ($z=0; $z <$this->sirapit[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->stabat->count() ; $j++) { 
            for ($z=0; $z <$this->stabat[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->tanjungpura->count() ; $j++) { 
            for ($z=0; $z <$this->tanjungpura[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }
        for ($j=0; $j < $this->wampu->count() ; $j++) { 
            for ($z=0; $z <$this->wampu[$j] ; $z++) { 
                \App\Models\Tps::create([
                    'nomortps' => "TPS".sprintf('%02d', $z+1) ,
                    'desa_id' =>  $this->i,
                ]);
            }

            $this->i++;
        }


        // Karo Running Data
      
    }
}
