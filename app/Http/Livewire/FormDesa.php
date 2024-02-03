<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Desa;
class FormDesa extends Component
{
    public $kecamatanid;
    public $kecamatan;
    public $kota;
    public function mount($kecamatanid,$kecamatan,$kota){
        $this->kecamatanid = $kecamatanid;
        $this->kecamatan = $kecamatan;
        $this->kota = $kota;
    }
    public function render()
    {
        $kota = $this->kota;
        $kecamatan = $this->kecamatan;
        $data = Desa::where('kecamatan_id',$this->kecamatanid)->get();
        return view('livewire.form-desa', compact('data','kota','kecamatan'));
    }
}
