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
    public $calegs = [0,0,0,0,0,0,0,0,0,0];
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
    public $show = false;
    protected $rules = [
        'lampiran1' => 'required|max:5000000',
        'partai' => 'required|integer',
        'countpartai' => 'required|integer|min:0',
        'calegs.*' => 'required|integer|min:0',
        'dpt' => 'required|integer|min:0',
        'dptb' => 'required|integer|min:0',
        'dpk' => 'required|integer|min:0',
        'pemilih' => 'required|integer|min:0',
        'suarasah' => 'required|integer|min:0',
        'suaratidaksah' => 'required|integer|min:0',
        // Tambahkan aturan validasi lainnya sesuai kebutuhan
    ];
    protected $messages = [
        'lampiran1.required' => 'Lampiran 1 harus diisi.',
        'partai.required' => 'Partai harus dipilih.',
        'partai.integer' => 'Partai harus berupa angka.',
        'countpartai.required' => 'Jumlah suara partai harus diisi.',
        'countpartai.integer' => 'Jumlah suara partai harus berupa angka.',
        'countpartai.min' => 'Jumlah suara partai tidak boleh kurang dari :min.',
        'calegs.*.required' => 'Jumlah suara caleg harus diisi.',
        'calegs.*.integer' => 'Jumlah suara caleg harus berupa angka.',
        'calegs.*.min' => 'Jumlah suara caleg tidak boleh kurang dari :min.',
        'dpt.required' => 'Jumlah pengguna hak pilih DPT harus diisi.',
        'dpt.integer' => 'Jumlah pengguna hak pilih DPT harus berupa angka.',
        'dpt.min' => 'Jumlah pengguna hak pilih DPT tidak boleh kurang dari :min.',
        'dptb.required' => 'Jumlah pengguna hak pilih DPTb harus diisi.',
        'dptb.integer' => 'Jumlah pengguna hak pilih DPTb harus berupa angka.',
        'dptb.min' => 'Jumlah pengguna hak pilih DPTb tidak boleh kurang dari :min.',
        'dpk.required' => 'Jumlah pengguna hak pilih DPK harus diisi.',
        'dpk.integer' => 'Jumlah pengguna hak pilih DPK harus berupa angka.',
        'dpk.min' => 'Jumlah pengguna hak pilih DPK tidak boleh kurang dari :min.',
        'pemilih.required' => 'Jumlah pemilih harus diisi.',
        'pemilih.integer' => 'Jumlah pemilih harus berupa angka.',
        'pemilih.min' => 'Jumlah pemilih tidak boleh kurang dari :min.',
        'suarasah.required' => 'Jumlah suara sah harus diisi.',
        'suarasah.integer' => 'Jumlah suara sah harus berupa angka.',
        'suarasah.min' => 'Jumlah suara sah tidak boleh kurang dari :min.',
        'suaratidaksah.required' => 'Jumlah suara tidak sah harus diisi.',
        'suaratidaksah.integer' => 'Jumlah suara tidak sah harus berupa angka.',
        'suaratidaksah.min' => 'Jumlah suara tidak sah tidak boleh kurang dari :min.',
        // Tambahkan pesan kesalahan khusus untuk aturan validasi lainnya sesuai kebutuhan
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
        $this->validate(); 
        $this->show = true;
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
        $this->show = false;
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
