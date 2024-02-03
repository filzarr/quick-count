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
    private $pkb,$gerindra,$pdip,$golkar,$nasdem,$buruh,$gelora,$pks,$pkn,$hanura,$garuda,$pan,$pbb,$demokrat,$psi,$perindo,$ppp,$ummat;
    public function __construct(){
        $this->pkb = collect([
            "H. M. Ali Umri, SH, M.Kn",									
            "Abdul Muin Pulungan",									
            "Epri Wahdiyah Nasution" ,									
            "Suprianto S", 									
            "Dr. Pontus Sitorus, M.Si", 									
            "Rosmida Nasution", 									
            "Ainul Rakhman tarigan, S.Ked", 									
            "Sabar Simajuntak, M.Sc", 									
            "Dinar Br. Manalu", 									
            "Mahsin, SH",	
        ]);
        $this->gerindra = collect([
            "Sugiat Santoso, SE, MSP",									
            "Prof. Dr. Ir. Djohar Arifin",									
            "Sri Kumala, SE, MM", 									
            "St. Nikson Silalalhi, ST, M.I.Kom", 									
            "Baharudin harahap, SH, MH", 									
            "Diana Lubis", 									
            "Budiman Damanik", 									
            "Jonny Buyung Saragi, SH, MH", 									
            "Fitri Hafsari Novi Yanti", 									
            "Elvin, SE, MH", 			
        ]);
        $this->pdip = collect([
            "Djarot Saiful Hidayat", 									
            "Bane Raja Manalu", 									
            "Siti Aminah Br Perangin-Angin", 									
            "Jenri Sinaga, SE, MM", 									
            "Dr. Junimart Girsang", 									
            "Beby Arbiana ST, MM", 									
            "Rudolf V. Saragih", 									
            "Wesley Silalahi, SH, M.Kn", 									
            "Anita Margaret", 									
            "Bob Andika Mamana Sitepu", 
        ]);
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
        $this->nasdem = collect([
            'Rudi Hartono Bangun, SE',
            'Ikhwan, SH, Mh',
            'Dr. Nurhajizah M, SH, MH',
            'Surya Bakti Batubara, SH',
            'Jr. Saragih',
            'Nisya Aluia Armaya Putri',
            'Abdul Gafur Ritonga, S.IP, MA',
           'Irham, ST, MIP',
            'Dra. Remita Br Sembiring',
            'Anthony',
        ]);
        $this->buruh = collect([
            'Drs. Parlindungan Sidabutar',
            'M. Hafiz Saragih, SH',
            'Rosidah',
            'Erfan Supriatna',
            'Mariyanto',
            'Arita Aritonang',
            'Edy Zaldi Kurniawan',
            'Dwi Purwiyanti',
            'Herlambang',
            'Fredy Sukarno, SH',

        ]);
        $this->gelora = collect([
            'Timbas',
            'Syamsul Qodri Marpaung',
            'Desy Syafrina nasution',
            'Zainuddin Nur, SH',
            'Ridwan Panjaitan',
            'Karina Rahma B.M',
            'Muhammad Haekal Afif Imran',
            'Hari Wibowo, SE',

        ]);
        $this->pks = collect([
            'Prof. Dr. H Irwan Prayitno, M.Sc',
            'H. Ansory Siregar',
            'Aninda Nabila Putri',
            'Dra. Hj. Hidayah Herlina Gusti',
            'Sahril Tumanggor, SE, SH, MH',
            'Sigit Hendro Mujiono',
            'Indah Setiyanti, S.Pd',
            'Elyas Marwan Sembiring, ST',
            'Bagus Joko Triono, SE',
            'Anwar Zailani, S.Si',

        ]);
        $this->pkn = collect([
            'Dr. Togu Harlen Lbn. Raja, SE, M.Si',
            'Drs. Jacobes Alexander Timsela',
            'Aini',
            'Aleksander S.U. Purba',
            'Yannes Tambunan',
            'Safitri Handayani',
            'Rini Anggraini, SE, MM',

        ]);
        $this->hanura = collect([
            'El Adrian Shah, SE',
            'H. M. Gani S',
            'Merlyn Samosir',
            'Dr. Irwansyah Tanjung, SH, MH',
            'Renenata Ardilesmana Siregar, S.Kom',
            'Pandan Sari',
            'Atanta Adrianus Bangun',
            'Widiya Lestari',
            'Yuda Mahendar',
            'Viky Parobby',
        ]);
        $this->garuda = collect([
            'Muhammad Syafrin',
            'Syafrizal',
            'Ernitha Medina',
            'Jonni Kenro Tumeang',
            'Jhonry Sitorus',
            'Samsiyah',
            'Khairul Haspy R',
            'Anggraini Pitaloka',
            'Alpida Maulani',
            'Vina Amelia',
        ]);
        $this->pan = collect([
            'Nasril Bahar SE',
            'Ahmad Padang',
            'Hj. Maisarah, S.Sos, MM',
            'Soleh Saragih, SH',
            'Bobby Afrial, SE',
            'Sri Hartini, SH',
            'Donni Husein Harahap',
            'Ahaddin, S.Pd',
            'Leni Indria Sari',
            'Dedy Gunawan Ritonga, ST',
        ]);
        $this->pbb = collect([
            'Fitriani',
            'Syaifan Nur, ST',
            'Imran Syahbaini, SE',
            'Baniyamin Siregar',
            'Ardhi Makhruzar',
            'Netti Susanti',
            'Batara Halim Siregar',
            'Thahura Alautiah, S.Pd',
        ]);
        $this->demokrat = collect([
            'Dr. Hinca I.P. Pandajiatan, SH, MH',
            'Jansen Sintindaon, SH, MH',
            'Marina',
            'H. M. Sajali, SE',
            'Ilham Harahap, S.Ag, MM',
            'Ramayani',
            'Pardomuan Nauli Simajuntak, SH',
            'Zulkifli, S.Pd.I',
            'Tengku Zulfitri',
            'Hasbil Mustaqim Lubis',
        ]);
        $this->psi = collect([
            'Muhammad Daffasya Adnan Sinik, Sh',
            'Ojak Martua Raja Situngkir S.M',
            'Anne Diniah Siti Fatimah',
            'Jhonson Sigalingging, SE',
            'Ivan Riandhi Purba, S.Pd',
            'Leoni Gloria Nauli',
            'Arif Permana',
            'Josef Daniel Mauli Siahaan',
            'Endah Dewi Utami',
            'Amantuah Saragih',
        ]);
        $this->perindo = collect([
            'dr. Sortaman Saragih, M.A.R.S',
            'Franky Liwijaya, SH',
            'Syska Ulina Ginting',
            'Rinto Maha, SH',
            'Muhammad Ichsan Tarore',
            'Sisca Suci Winara',
            'Afriyadi Syahputra Saragih, S. Ars',
            'Muara Siagian, SE, MM',
            'Wina Damayanti',
            'Yudha Mahardika Mulyadi',

        ]);
        $this->ppp = collect([
            'H. Darwin S.Ag, M.AP',
            'Abdul Aziz ST, S.Pd, MM, MAP',
            'Dra. Aidawati',
            'Ir Fahmi Alfansi Putra Pane',
            'Tamrinuddin',
            'Nurasyiah',
            'Sayhbela Siagian',
            'Salamiah, S.Pd.I',
            'Ibrahim Audah',
            'Hasan Basri Sirait, S.Ag',
        ]);
        $this->ummat = collect([
            'M.S. Kaban',
            'Dr. TB Massa Djaafar, M.Si',
            'Nursiah, SE',
            'Aldie Nusa Putra',
            'Hakim Hatta',
            'Rina Pratiwi Munawaroh',
            'Suparmi',
            'Yanuar Ramadan',

        ]);
    }
    public function run(): void
    {
        for ($i=0; $i < $this->pkb->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->pkb[$i] ,
                'partai_id' => '1',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->gerindra->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->gerindra[$i] ,
                'partai_id' => '2',
            ]);
            $this->j++;
        }
        
        for ($i=0; $i < $this->pdip->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->pdip[$i] ,
                'partai_id' => '3',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->golkar->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->golkar[$i] ,
                'partai_id' => '4',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->nasdem->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->nasdem[$i] ,
                'partai_id' => '5',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->buruh->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->buruh[$i] ,
                'partai_id' => '6',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->gelora->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->gelora[$i] ,
                'partai_id' => '7',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->pks->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->pks[$i] ,
                'partai_id' => '8',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->pkn->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->pkn[$i] ,
                'partai_id' => '9',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->hanura->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->hanura[$i] ,
                'partai_id' => '10',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->garuda->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->garuda[$i] ,
                'partai_id' => '11',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->pan->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->pan[$i] ,
                'partai_id' => '12',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->pbb->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->pbb[$i] ,
                'partai_id' => '13',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->demokrat->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->demokrat[$i] ,
                'partai_id' => '14',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->psi->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->psi[$i] ,
                'partai_id' => '15',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->perindo->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->perindo[$i] ,
                'partai_id' => '16',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->ppp->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->ppp[$i] ,
                'partai_id' => '17',
            ]);
            $this->j++;
        }
        for ($i=0; $i < $this->ummat->count() ; $i++) { 
            \App\Models\Caleg::create([
                'id' => $this->j,
                'namacaleg' => $this->ummat[$i] ,
                'partai_id' => '18',
            ]);
            $this->j++;
        }
    }
}
