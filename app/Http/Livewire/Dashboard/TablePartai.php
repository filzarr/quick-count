<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use DB;
use App\Models\Caleg;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\desa;
use App\Models\Tps;
class TablePartai extends Component
{
    public $partai;
    public $ide;
    public $category;
    public $total = 0;
    public $category_id;
    public $category_total;
    public function mount($partai, $ide,$category, $category_id){
        $this->partai = $partai;
        $this->ide = $ide;
        $this->category = $category;
        $this->category_id = $category_id;
    }

    public function render()
    {
        $data = DB::table('total_count_partai_view')
        ->where('partai', $this->partai)
        ->get();
        
        if ($this->category == 'kota') {
            $this->category_total = "kecamatan";
            $datalokasi = Kecamatan::select('kecamatan as nama', 'id')->where('kota_id', $this->category_id)->get();
            
        }
        elseif ($this->category == 'kecamatan') {
            $this->category_total = "desa";
            $datalokasi = Desa::select('desa as nama','id')->where('kecamatan_id',$this->category_id)->get();
            
        }
        elseif ($this->category == 'desa') {
            $this->category_total = "tps";
            $datalokasi = Tps::select('nomortps as nama','id')->where('desa_id', $this->category_id)->get();
            
        }
        else{
            $this->category_total = "kota";
            $datalokasi = Kota::select('Kota as nama','id')->get();
        } 
        $caleg = Caleg::select('namacaleg as nama', 'id as angka')->where('partai_id', $this->ide)->get();
        return view('livewire.dashboard.table-partai', compact('data','caleg', 'datalokasi'));
    }
}
