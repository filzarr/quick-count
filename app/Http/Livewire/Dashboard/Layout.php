<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Kota;
use App\Models\Partai;
class Layout extends Component
{
    public $kat;
    public $idcategory;
    protected $listeners = ['changefilters'];
    public function changefilters($request){
        $this->idcategory = $request['idcategory'];
        $this->kat = $request['category'];
    }

    public function render()
    {
        $data = Partai::select('partai as partai', 'id as ide')->get();
        return view('livewire.dashboard.layout', compact('data'));
    }
}
