<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kecamatan;
class FormKecamatan extends Component
{
    
    public $kotaid;
    public $kota;
    public function mount($kotaid, $kota){
        $this->kotaid = $kotaid;
        $this->kota = $kota;
    }
    public function render()
    {
        $kota = $this->kota;
        $data = Kecamatan::where('kota_id',$this->kotaid)->get();
        return view('livewire.form-kecamatan', compact('data','kota'));
    }
}
