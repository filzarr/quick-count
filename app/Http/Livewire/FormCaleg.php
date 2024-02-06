<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Partai;
use App\Models\Caleg;
use App\Models\CountCaleg;
use App\Models\CountPartai;
use App\Models\DataPemilih;
use App\Models\LampiranTps;
Use Alert;
use Livewire\WithFileUploads;

class FormCaleg extends Component
{
    use WithFileUploads;
    public $lampiran1;
    public $lampiran2;
    public $lampiran3;
    public $lampiran4;
    public $lampiran5;
    public $lampiran6;
    public $lampiran7;
    public $partai = 1;
    public $countpartai = 0;
    public $calegs;
    public $tps;
    public $countcaleg = 0;
    public $countall = 0 ;
    public $inputcalegs;
    public $dpt = 0;
    public $dptb = 0;
    public $dpk = 0;
    public $totalpenggunahakpilih;
    public $suarasah = 0;
    public $suaratidaksah = 0;
    public $totalsuarasahtidak;
    public $pemilih = 0;

    protected $rules = [
        'lampiran1' => 'required|max:5000',
    ];
    public function mount($tps){
        $this->tps = $tps;
    }
    public function changepartai(){
        $this->inputcalegs = [];
        $this->calegs = [];
        $this->countcaleg = 0;
        $this->countall = (int)$this->countpartai + (int)$this->countcaleg;
        
    }
    public function updated()
    {
        
        $this->countcaleg = 0;
        if (isset($this->calegs)) {
            # code...
            for ($i=0; $i < count($this->calegs); $i++) { 
                if (isset($this->calegs[$i])) {
                    $this->countcaleg = $this->countcaleg + (int)$this->calegs[$i];
                }
                else{
                    $this->calegs[$i] = 0;
                    $this->countcaleg = $this->countcaleg + (int)$this->calegs[$i];
          
                }
            }
        }
        $this->countall = (int)$this->countpartai + (int)$this->countcaleg;
        
    }
    public function increasepartai(){
        $this->countpartai++;   
    }
    public function decreasepartai(){
        if ($this->countpartai > 0) {
            $this->countpartai--;
        }
    }
    public function submit(){
        DataPemilih::create([
            'tps_id' => $this->tps,
            'kategori' => 'dpt',
            'suara' => $this->dpt,
        ]);
        DataPemilih::create([
            'tps_id' => $this->tps,
            'kategori' => 'dptb',
            'suara' => $this->dptb,
        ]);
        DataPemilih::create([
            'tps_id' => $this->tps,
            'kategori' => 'dpk',
            'suara' => $this->dpk,
        ]);
        DataPemilih::create([
            'tps_id' => $this->tps,
            'kategori' => 'suara-sah',
            'suara' => $this->suarasah,
        ]);
        DataPemilih::create([
            'tps_id' => $this->tps,
            'kategori' => 'suara-tidak-sah',
            'suara' => $this->suaratidaksah,
        ]);
        DataPemilih::create([
            'tps_id' => $this->tps,
            'kategori' => 'pemilih',
            'suara' => $this->pemilih,
        ]);
        for ($i=0; $i <count($this->calegs) ; $i++) { 
            CountCaleg::create([
                'caleg_id' => $this->inputcalegs[$i],
                'suara' => $this->calegs[$i],
                'tps_id' => $this->tps,
            ]);
        }
        CountPartai::create([
            'partai_id' => $this->partai,
            'suara' => $this->countpartai,
            'tps_id' => $this->tps,
        ]);
        if ($this->lampiran1) {
            $img =md5($this->lampiran1 . microtime()).'.'.$this->lampiran1->extension();
            $this->lampiran1->storeAs('lampiran/', $img,'public');
            LampiranTps::create([
                'tps_id' => $this->tps,
                'file' => $img,
            ]);
        }
        if ($this->lampiran2) {
            $img =md5($this->lampiran2 . microtime()).'.'.$this->lampiran2->extension();
            $this->lampiran2->storeAs('lampiran/', $img,'public');
            LampiranTps::create([
                'tps_id' => $this->tps,
                'file' => $img,
            ]);
        }
        if ($this->lampiran3) {
            $img =md5($this->lampiran3 . microtime()).'.'.$this->lampiran3->extension();
            $this->lampiran3->storeAs('lampiran/', $img,'public');
            LampiranTps::create([
                'tps_id' => $this->tps,
                'file' => $img,
            ]);
        }
        if ($this->lampiran4) {
            $img =md5($this->lampiran4 . microtime()).'.'.$this->lampiran4->extension();
            $this->lampiran4->storeAs('lampiran/', $img,'public');
            LampiranTps::create([
                'tps_id' => $this->tps,
                'file' => $img,
            ]);
        }
        if ($this->lampiran5) {
            $img =md5($this->lampiran5 . microtime()).'.'.$this->lampiran5->extension();
            $this->lampiran5->storeAs('lampiran/', $img,'public');
            LampiranTps::create([
                'tps_id' => $this->tps,
                'file' => $img,
            ]);
        }
        if ($this->lampiran6) {
            $img =md5($this->lampiran6 . microtime()).'.'.$this->lampiran6->extension();
            $this->lampiran6->storeAs('lampiran/', $img,'public');
            LampiranTps::create([
                'tps_id' => $this->tps,
                'file' => $img,
            ]);
        }
        if ($this->lampiran7) {
            $img =md5($this->lampiran7 . microtime()).'.'.$this->lampiran7->extension();
            $this->lampiran7->storeAs('lampiran/', $img,'public');
            LampiranTps::create([
                'tps_id' => $this->tps,
                'file' => $img,
            ]);
        }
        Alert::success('Berhasil Mengisi Data', 'Terima Kasih Telah Melakukan Pengisian Data Suara');
        return redirect('/form');
    }


    
    public function render()
    {
        $this->totalpenggunahakpilih = (int)$this->dpt +(int)$this->dptb + (int)$this->dpk;
        $this->totalsuarasahtidak = (int)$this->suarasah + (int)$this->suaratidaksah;
        // dd($this->calegs[0]);
        $caleg = Caleg::where('partai_id',$this->partai)->get();

        $datapartai = Partai::get();
        return view('livewire.form-caleg', compact('datapartai','caleg'));
    }
}
