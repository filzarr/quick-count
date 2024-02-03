<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tps;
class FormTps extends Component
{
    public $kota;
    public $kecamatan;
    public $desa;
    public $desaid;
    public function mount($kota,$kecamatan,$desa,$desaid){
        $this->kota = $kota;
        $this->kecamatan = $kecamatan;
        $this->desa = $desa;
        $this->desaid = $desaid;
    }
    public function render()
    {
        $kota =$this->kota;
        $kecamatan = $this->kecamatan;
        $desa = $this->desa;
        $data = Tps::where('desa_id',$this->desaid)->get();
        return view('livewire.form-tps', compact('data','kecamatan','desa','kota'));
    }
}
