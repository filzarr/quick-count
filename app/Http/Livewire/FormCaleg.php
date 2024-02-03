<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Partai;
use App\Models\Caleg;
use App\Models\CountCaleg;
use App\Models\CountPartai;
Use Alert;
class FormCaleg extends Component
{
    public $partai = 1;
    public $countpartai = 0;
    public $calegs;
    public $tps;
    public $countcaleg = 0;
    public $countall = 0 ;
    public $inputcalegs;
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
        Alert::success('Berhasil Mengisi Data', 'Terima Kasih Telah Melakukan Pengisian Data Suara');
        return redirect('/form');
    }


    
    public function render()
    {
        // dd($this->calegs[0]);
        $caleg = Caleg::where('partai_id',$this->partai)->get();

        $datapartai = Partai::get();
        return view('livewire.form-caleg', compact('datapartai','caleg'));
    }
}
