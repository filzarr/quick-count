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
        $this->barusjahe = collect([
            'Paribun',
            'Rumanis',
            'Sinaman',
            'Sukanalu',
            'Barusjulu',
            'Tangkidik',
            'Sukujulu',
            'Barusjahe',
            'Bulanjahe',
            'Partumbuken',
            'Talimbaru',
            'Sikab',
            'Persadanta',
            'Bulanjulu',
            'Semangat',
            'Serdang',
            'Tanjung Barus',
            'Sarimanis',
            'Penampen'
        ]);
        $this->berastagi = collect([
            'Lau Mulgap I',
            'Lau Mulgap II',
            'Gundailing I',
            'Gundailing II',
            'Doulu',
            'Guru Sinaga',
            'Raya',
            'Rumah Berastagi',
            'Sempajaya',
            'Lau Gumba'
        ]);
        $this->dolarakyat = collect([
            'Kubucolia',
            'Ujung Sampun',
            'Bukit',
            'Melas',
            'Sampun',
            'Sugihen',
            'Dola Rakyat'
        ]);
        $this->juhar = collect([
            'Juhur Perangin-angin',
            'Lau Lingga',
            'Kidupen',
            'Namosuro',
            'Bekilang',
            'Sugihen',
            'Pernantin',
            'Nageri',
            'Juhar Ginting',
            'Juhar Tarigan',
            'Pasar Baru',
            'Batu Mamak',
            'Naga',
            'Kutambelin',
            'Mbetong',
            'Keriahen',
            'Gunung Juhar',
            'Ketawaren',
            'Jandi',
            'Buluh Pancur',
            'Kutagugung',
            'Sukabobo',
            'Lau Kidupen',
            'Sigendrang',
            'Juhar Ginting Sadanioga'
        ]);
        $this->kabanjahe = collect([
            'Padang Mas',
            'Lau Cimba',
            'Gung Leto',
            'Gung Negri',
            'Kampung Dalam',
            'Rumah Kabanjahe',
            'Kaban',
            'Ketaren',
            'Samura',
            'Lau Simomo',
            'Sumber Mufakat',
            'Kandibata',
            'Kacaribu'
        ]);
        $this->kutabuluh = collect([
            'Negri Jahe',
            'Kutabuluh Gugung',
            'Siabang abang',
            'Lau Bulu',
            'Bintang Meriah',
            'Jinabun',
            'Kutamale',
            'Ujung Deleng',
            'Gunung Meriah',
            'Buah Raya',
            'Tanjung Merahe',
            'RIH Tengah',
            'Kutabulu',
            'Liang Merdeka',
            'Pola Tebu',
            'Mburidi',
        ]);
        $this->laubaleng = collect([
            'Martelu',
            'Mbal-mbal Petarem',
            'Lau Peranggumen',
            'Tanjung Gunung',
            'Lau Baleng',
            'Durin Rugum',
            'Perbulan',
            'Kutambelin',
            'Linggamuda',
            'Kinangkong',
            'Rambah Tampu',
            'Lau Peradep',
            'Buluh Pancur',
            'Batu Rongkam',
            'Pintu Angin',

        ]);
        $this->mardingding = collect([
            'Bandar Purba',
            'Bukit Makmur',
            'Kuta Pengkih',
            'Lau Garut',
            'Lau Kesumpat',
            'Lau Mulgap',
            'Lau Palkam',
            'Lau Pengulu',
            'Lau Solu',
            'Mardingding',
            'Rimo Bunga',
            'Tanjung Pamah',
        ]);
        $this->merdeka = collect([
            'Cinta Rakyat',
            'Semangat',
            'Ujung Teran',
            'Gongsol',
            'Jaranguda',
            'Semangat Gunung',
            'Deram',
            'Merdeka',
            'Sadaperarih'
        ]);
        $this->merek = collect([
            'Aji Nembah',
            'Bandar Tongging',
            'Dokan',
            'Garingging',
            'Kodon Kodon',
            'Merek',
            'Mulia Rakyat',
            'Nagalingga',
            'Nagara',
            'Negeri Tongging',
            'Pancur Batu',
            'Pengambaten',
            'Pertimbi Lama',
            'Pertibi Tembe',
            'Regaji',
            'Sibolangit',
            'Situnggaling',
            'Sukamandi',
            'Tongging' 

        ]);
        $this->munte = collect([
            'Bandar Meriah',
            'Barung Kersap',
            'Biaknampe',
            'Buluh Naman',
            'Gunung Manumpak',
            'Gunung Saribu',
            'Guru Benua',
            'Kaban Tua',
            'Kinepen',
            'Kuta Gerat',
            'Kutambaru',
            'Kutasuah',
            'Munte',
            'Nageri',
            'Parimbalang',
            'Partumbungen',
            'Sari Munte',
            'Sari Nembah',
            'Selakkar',
            'Singgamanik',
            'Sukarame',
            'Tanjung Beringin'
        ]);
        $this->namateran = collect([
            'Gung Pinto',
            'Kebayakan',
            'Kutagugung',
            'Kutarayat',
            'Kuta Tonggal',
            'Kutambelin',
            'Naman',
            'Ndaskati',
            'Sigarang-sigarang',
            'Sukanalu',
            'Sukandebi',
            'Sukatepu'

        ]);
        $this->payung = collect([
            'Batu Karang',
            'Cimbang',
            'Gurukinaya',
            'Payung',
            'Rimo kayu',
            'Selandi',
            'Ujung Payung'
        ]);
        $this->simpangempat = collect([
            'Perteguhen',
            'Lingga',
            'Tiga Pancur',
            'Beras Tepu',
            'Ndokum Siroga',
            'Jeraya',
            'Surbakti',
            'Torong',
            'Beganding',
            'Nangbelawan',
            'Gajah',
            'Lingga Julu',
            'Sirumbia',
            'Kutatengah',
            'Gamber',
            'Pintubesi',
            'Bulanbaru',
        ]);
        $this->tigabinanga = collect([
            'Tigabinanga',
            'Gunung',
            'Kemkem',
            'Pertumbuken',
            'Kuala',
            'Limang',
            'Perbesi',
            'Lau Kapur',
            'Kutabangun',
            'Kutaraga',
            'Pengendangen',
            'Simolap',
            'Simpang Pengendangen',
            'Kutagerat',
            'Sukajulu',
            'Kutagaluh',
            'Bunga Baru',
            'Kutambaru Punti',
            'Kutabuara', 
            'Batumamak'
            
        ]);
        $this->tiganderket = collect([
            'Suka Tendel',
            'Mardinding',
            'Kutagaluh',
            'Kutambaru',
            'Jandi Meriah',
            'Tiganderket',
            'Tanjung Pulo',
            'Tanjung Merawa',
            'Perbaji',
            'Temburun',
            'Kuta Kepar',
            'Penampen',
            'Tanjung Mbelang',
            'Nari Gunung 1',
            'Nari Gunung II',
            'Gunung Merlawan',
            'Susuk'

        ]);
        $this->tigapanah = collect([
            'Kuta Kepar', 
            'Ajijulu',
            'Singa', 
            'Ajijahe',
            'Bunu Raya',
            'Kubusimbelang',
            'Tiga Panah', 
            'Suka',
            'Kacanambun',
            'Kutajulu',
            'Bertah',
            'Manukulia',
            'Lau Rimah',
            'Sukadame',
            'Mulawari',
            'Sukamaju',
            'Kutambelin',
            'Kutabale',
            'Leparsamura',
            'Saberaya',
            'Ajimbelang',
            'Ajibuhara',
            'Lampar',
            'Salit',
            'Suka Mbayak',
            'Suka Pilihen',
            'Sukameria',
            'Bekerah',
            'Simacem'

        ]);
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
        for ($j=0; $j < $this->barusjahe->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->barusjahe[$j] ,
                'kecamatan_id' => '29',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->berastagi->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->berastagi[$j] ,
                'kecamatan_id' => '30',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->dolarakyat->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->dolarakyat[$j] ,
                'kecamatan_id' => '31',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->juhar->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->juhar[$j] ,
                'kecamatan_id' => '32',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->kabanjahe->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->kabanjahe[$j] ,
                'kecamatan_id' => '33',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->kutabuluh->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->kutabuluh[$j] ,
                'kecamatan_id' => '34',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->laubaleng->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->laubaleng[$j] ,
                'kecamatan_id' => '35',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->mardingding->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->mardingding[$j] ,
                'kecamatan_id' => '36',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->merdeka->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->merdeka[$j] ,
                'kecamatan_id' => '37',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->merek->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->merek[$j] ,
                'kecamatan_id' => '38',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->munte->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->munte[$j] ,
                'kecamatan_id' => '39',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->namateran->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->namateran[$j] ,
                'kecamatan_id' => '40',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->payung->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->payung[$j] ,
                'kecamatan_id' => '41',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->simpangempat->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->simpangempat[$j] ,
                'kecamatan_id' => '42',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->tigabinanga->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->tigabinanga[$j] ,
                'kecamatan_id' => '43',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->tiganderket->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->tiganderket[$j] ,
                'kecamatan_id' => '44',
            ]);
            $this->i++;
        }
        for ($j=0; $j < $this->tigapanah->count() ; $j++) { 
            \App\Models\Desa::create([
                'id' => $this->i + 1,
                'desa' => $this->tigapanah[$j] ,
                'kecamatan_id' => '45',
            ]);
            $this->i++;
        }
    }
}
