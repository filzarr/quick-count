<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    private $babalan,$batangserangan,$laubaleng,$bahorok,$besitang,$binjai,$brandanbarat,$gebang,$hinai,$kuala,$kuatambaru,$pangkalasusu,$pematangjaya,$salapian,$sawitseberang,$secanggang,$seibinge,$seilepan,$selesai,$sirapit,$stabat,$tanjungpura,$wampu, $binjaibarat, $binjaikota,$binjaiselatan,$binjaitimur,$binjaiutara,$barusjahe,$berastagi,$dolarakyat,$juhar,$kabanjahe,$kutabuluh,$mardingding,$merdeka,$merek,$munte,$namateran,$payung,$simpangempat,$tigabinanga,$tiganderket,$tigapanah;
    private $i;
    private $j;
    public function __construct(){
        // Kabupaten Binjai
        $this->binjaibarat = collect([
            'Bandar Senembah',
            'Limau Mungkur',
            'Limau Sundai',
            'Paya Roba',
            'Suka Maju',
            'Suka Ramai'
        ]);
        $this->binjaikota = collect([
            'Berngam',
            'Binjai',
            'Kartini',
            'Pekan Binjai',
            'Satria',
            'Setia',
            'Tangsi'
        ]);
        $this->binjaiselatan = collect([
            'Bhakti Karya',
            'Binjai Estate',
            'Pujidadi',
            'Rambung Barat',
            'Rambung Dalam',
            'Rambung Timur',
            'Tanah Merah',
            'Tanah Seribu'
        ]);
        $this->binjaitimur = collect([
            'Dataran Tinggi',
            'Mencirim',
            'Sumber Karya',
            'Sumber Mulyorejo',
            'Tanah Tinggi',
            'Timbang Langkat',
            'Tunggurono'
        ]);
        $this->binjaiutara = collect([
            'Cengkeh Turi',
            'Damai',
            'Jati Karya',
            'Jati Makmur',
            'Jati Utomo',
            'Jatinegara',
            'Kebun Lada',
            'Nangka',
            'Pahlawan'
        ]);



        // Kabupaten Langkat
        $this->babalan = collect([
            'Brandan Barat',
            'Brandan Timur',
            'Brandan Timur Baru',
            'Pelawi Selatan',
            'Pelawi Utara',
            'Securai Selatan',
            'Securai Utara',
            'Teluk Meku'
        ]);
        $this->bahorok = collect([
            'Batu Jonjong',
            'Empus',
            'Lau Damak',
            'Pekan Bahorok',
            'Perk. Bukit Lawang',
            'Perk. Bungara',
            'Perk. Pulau Rambung',
            'Perk. S Musam',
            'Perk. Turangi',
            'Samperaya',
            'Sei Musam Kendit',
            'Sei Musam Pembangunan',
            'Sematar',
            'Simpang Pulau Rambung',
            'Suka Rakyat',
            'Tanjung Lenggang',
            'Timbang Jaya',
            'Timbang Lawan',
            'Ujung Bandar',
        ]);
        $this->batangserangan = collect([
            'Batang Serangan',
            'Karya Jadi',
            'Kwala Musam',
            'Namo Sialang',
            'Paluh Pakih Babusalam',
            'Sei Bamban',
            'Sei Musam',
            'Sei Serdang'
        ]);
        $this->besitang = collect([
            'Bukit Kubu',
            'Bukit Mas',
            'Bukit Selamat',
            'Halaban',
            'Kampung Lama',
            'Pekan Besitang',
            'PIR ADB Besitang',
            'Sekoci',
            'Suka Jaya',
            
        ]);
        $this->binjai = collect([
            'Kwala Begumit',
            'Perdamaian',
            'Sambi Rejo',
            'Sendang Rejo',
            'Sidomulyo',
            'Suka Makmur',
            'Tanjung Jati',
        ]);
        $this->brandanbarat = collect([
            'Kelantan',
            'Lubuk Kasih',
            'Lubuk Kertang',
            'Pangkalan Batu',
            'Perlis',
            'Sei Tualang',
            'Tangkahan Durian',
        ]);
        $this->gebang = collect([
            'Air Hitam',
            'Bukit Mengkirai',
            'Dogang',
            'Kwwala Gebang',
            'Padang Langkat',
            'Paluh Manis',
            'Pasar Rawa',
            'Pasiran',
            'Paya Bengkuang',
            'Pekan Gebang',
            'Sangga Lima'
        ]);
        $this->hinai = collect([
            'Baru Pasar VII',
            'Batu Malenggang',
            'Cempa',
            'Hinai Kanan',
            'Kebun Lada',
            'Muka Raya',
            'Paya Renggas',
            'Perkebunan TJ. Beringin',
            'Suka Damai',
            'Suka Damai Timur',
            'Suka Jadi',
            'Tamaran',
            'Tanjung Mulya'
        ]);
        $this->kuala = collect([
            'Balai Kasih',
            'Bekiung',
            'Bela Rakyat',
            'Belangkahan',
            'Beruam',
            'Besadi',
            'Dalan Naman',
            'Garunggang',
            'Namo Mbelin',
            'Parit Bindu',
            'Pekan Kuala',
            'Perkebunan Bekiun',
            'Raja Tengah',
            'Sei Penjara',
            'Sido Makmur',
            'Suka Damai'
        ]);
        $this->kutambaru = collect([
            'Kaperas',
            'Kuta Gajah',
            'Kutambaru',
            'Namotongan',
            'Namoteras',
            'Perkebunan Marike',
            'Rampah',
            'Sulkam'
        ]);
        $this->padangtualang = collect([
            'Banjaran Raya',
            'Besilam',
            'Bukit Sari',
            'Buluh Telang',
            'Jati Sari',
            'Kawal Pesilam',
            'Padang Tualang',
            'Serapuh ABC',
            'Suka Ramai',
            'Tanjung Putus',
            'Tanjung Selamat',
            'Tebing Tanjung Selamat',
        ]);
        $this->pangkalansusu = collect([
            'Alur Cempedak',
            'Beras Basah',
            'Bukit Jengkol',
            'Pangkalan Siata',
            'Paya Tampak',
            'Pintu Air',
            'Pulai Kampai',
            'Pulai Sembilan',
            'Sei Meran',
            'Sei Siur',
            'Tanjung Pasar'
        ]);
        $this->pematangjaya = collect([
            'Damar Condong',
            'Limau Mungkur',
            'Pematang Tengah',
            'Perk Damar Condong',
            'Perk Perapen',
            'Salahaji',
            'Serang Jaya',
            'Serang Jaya Hilir'
        ]);
        $this->salapian = collect([
            'Adin Tengah',
            'Lau Lugur',
            'Lau Tepu',
            'Minta Kasih',
            'Naman Jahe',
            'Pama Tambunan',
            'Panco Warno',
            'Pancor Ido',
            'Parangguam',
            'Perk. Bandar Telu',
            'Perk. Gelugur Langkat',
            'Perk. Tambunan',
            'Perk. Tanjung Keliling',
            'Tanjung Langkat',
            'Turangi',
            'Ujung Bandar',
            'Ujung Teran'
        ]);
        $this->sawitseberang = collect([
            'Alur Gadung',
            'Alur Melati',
            'Mekar Sawit',
            'Sawit Hulu',
            'Sawit Seberang',
            'Sei Litur Tasik',
            'Simpang Tigas'
        ]);
        $this->secanggang = collect([
            'Cinta Raja',
            'Hinai Kiri',
            'Jaring Halus',
            'Karang Anyar',
            'Karang Gading',
            'Kebun Kelapa',
            'Kepala Sungai',
            'Kwala Besar',
            'Pantai Gading',
            'Perkotaan',
            'Secanggang',
            'Selotong',
            'Suka Mulia',
            'Sungai Ular',
            'Tanjung Ibus',
            'Telaga Jernih',
            'Teluk'
        ]);
        $this->seibinge = collect([
            'Belinten',
            'Durian Lingga',
            'EMP KW Mencirim',
            'Gunung Ambat',
            'Mekar Jaya',
            'Namu Ukur Selatan',
            'Namu Ukur Utara',
            'Pasar IV Namo Terasi',
            'Pasar VI Namo Terasi',
            'Pasar VII Namo Terasi',
            'Pekan Sawah',
            'Purwobinangun',
            'Rumah Galuh',
            'Simpang Kuta Buluh',
            'Tanjung Gunung',
            'Telaga',
        ]);
        $this->seilepan = collect([
            'Alur Dua',
            'Alur Dua Baru',
            'Harapan Baru',
            'Harapan Jaya',
            'Harapan Maju',
            'Harapan Makmur',
            'Lama',
            'Lama Baru',
            'Mekar Makmur',
            'Puraka I',
            'Puraka II',
            'Sei Bilah',
            'Sei Bilah Timur',
            'Telaga Said'
        ]);
        $this->selesai = collect([
            'Bekulap',
            'Kuta Parit',
            'Kwala Air Hitam',
            'Laumulgab',
            'Mancang',
            'Nambiki',
            'Padang Brahrang',
            'Padang Cermin',
            'Pekan Selesai',
            'Perhiasan',
            'Sei Limbat',
            'Selayang',
            'Selayang Baru',
            'Tanjung Merahe',
        ]);
        $this->sirapit = collect([
            'Aman Damai',
            'Gunung Tinggi',
            'Perk Amal Tani',
            'Pulau Semikat',
            'Sebertung',
            'Serapit',
            'Sidorejo',
            'Suka Pulung',
            'Sumber Jaya',
            'Tanjung Keriahan',
        ]);
        $this->stabat = collect([
            'Ara Condong',
            'Banyumas',
            'Dendang',
            'Karang Rejo',
            'Kwala Begumit',
            'Kwala Bingai',
            'Mangga',
            'Pantai Gemi',
            'Paya Mabar',
            'Perdamaian',
            'Sidomulyo',
            'Stabat Baru'
        ]);
        $this->tanjungpura = collect([
            'Baja Kuning',
            'Bubun',
            'Karya Maju',
            'Kwala Langkat',
            'Kwala Serapuh',
            'Lalang',
            'Pantai Cermin',
            'Paya Perupuk',
            'Pekan Tj Pura',
            'Perkubuan',
            'Pematang Cengal',
            'Pematang Cengal Barat',
            'Pematang Serai',
            'Pematang Tengah',
            'Pulau Banyak',
            'Serapuh Asli',
            'Suka Maju',
            'Tapak Kuda',
            'Teluk Bakung',
        ]);
        $this->wampu = collect([
            'Besilam Bukit Lambasa',
            'Bingai',
            'Bukit Melintang',
            'Gergas',
            'Gohor Lama',
            'Jantera Stabat',
            'Kebun Labok',
            'Mekar Jaya',
            'Paya Tusam',
            'Pertumbukan',
            'Stabat Lama',
            'Stabat Lama Barat',
            'Stungkit',
            'Sumber Mulyo'
        ]);

        // Kabupaten Karo
   
    }
    public function run(): void
    {
        // Binjai Running Data
   
        for ($j=0; $j < $this->binjaibarat->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->binjaibarat[$j] ,
                'kecamatan_id' => '4',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->binjaikota->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->binjaikota[$j] ,
                'kecamatan_id' => '1',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->binjaiselatan->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->binjaiselatan[$j] ,
                'kecamatan_id' => '3',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->binjaiutara->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->binjaiutara[$j] ,
                'kecamatan_id' => '2',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->binjaitimur->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->binjaitimur[$j] ,
                'kecamatan_id' => '5',
            ]);
            $this->i++;
        }

        // Langkat Running Data
        for ($j=0; $j < $this->babalan->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->babalan[$j] ,
                'kecamatan_id' => '6',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->bahorok->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->bahorok[$j] ,
                'kecamatan_id' => '7',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->batangserangan->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->batangserangan[$j] ,
                'kecamatan_id' => '8',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->besitang->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->besitang[$j] ,
                'kecamatan_id' => '9',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->binjai->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->binjai[$j] ,
                'kecamatan_id' => '10',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->brandanbarat->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->brandanbarat[$j] ,
                'kecamatan_id' => '11',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->gebang->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->gebang[$j] ,
                'kecamatan_id' => '12',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->hinai->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->hinai[$j] ,
                'kecamatan_id' => '13',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->kuala->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->kuala[$j] ,
                'kecamatan_id' => '14',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->kutambaru->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->kutambaru[$j] ,
                'kecamatan_id' => '15',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->padangtualang->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->padangtualang[$j] ,
                'kecamatan_id' => '16',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->pangkalansusu->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->pangkalansusu[$j] ,
                'kecamatan_id' => '17',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->pematangjaya->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->pematangjaya[$j] ,
                'kecamatan_id' => '18',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->salapian->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->salapian[$j] ,
                'kecamatan_id' => '19',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->sawitseberang->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->sawitseberang[$j] ,
                'kecamatan_id' => '20',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->secanggang->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->secanggang[$j] ,
                'kecamatan_id' => '21',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->seibinge->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->seibinge[$j] ,
                'kecamatan_id' => '22',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->seilepan->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->seilepan[$j] ,
                'kecamatan_id' => '23',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->selesai->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->selesai[$j] ,
                'kecamatan_id' => '24',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->sirapit->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->sirapit[$j] ,
                'kecamatan_id' => '25',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->stabat->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->stabat[$j] ,
                'kecamatan_id' => '26',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->tanjungpura->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->tanjungpura[$j] ,
                'kecamatan_id' => '27',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->wampu->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->wampu[$j] ,
                'kecamatan_id' => '28',
            ]);
            $this->i++;
        }


        // Karo Running Data

    }
}
