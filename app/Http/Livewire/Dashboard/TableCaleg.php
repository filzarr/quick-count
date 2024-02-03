<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Caleg;
use DB;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\tps;
class TableCaleg extends Component
{
    public $nama;
    public $ide;
    public $lokasiid;
    public $category;
    public $categorytotal;
    public function mount($nama, $ide, $lokasiid,$lokasicategory){
        $this->nama = $nama;
        $this->ide = $ide;
        $this->lokasiid =$lokasiid;
        $this->lokasicategory = $lokasicategory;
    }
    public function render()
    {
        $data = Caleg::select(DB::raw('kotas.Kota AS kota, COALESCE(SUM(count_calegs.suara), 0) AS total_suara '))
        ->join('count_calegs','calegs.id','=','count_calegs.caleg_id' )
        ->leftJoin('tps', 'count_calegs.tps_id', '=', 'tps.id')
        ->leftJoin('desas', 'tps.desa_id', '=', 'desas.id')
        ->leftJoin('kecamatans', 'desas.kecamatan_id', '=', 'kecamatans.id')
        ->leftJoin('kotas', 'kecamatans.kota_id', '=', 'kotas.id')
        ->where('calegs.id', $this->ide)
        ->groupBy('kotas.id')
        ->get();
        if ($this->lokasicategory == 'kota') {
            $this->categorytotal = "kecamatan";
            $datalokasi = Kecamatan::select('kecamatan as nama')->where('kota_id', $this->lokasiid)->get();
            
        }
        elseif ($this->lokasicategory == 'kecamatan') {
            $this->categorytotal = "desa";
            $datalokasi = Desa::select('desa as nama')->where('kecamatan',$this->lokasiid)->get();
            
        }
        elseif ($this->lokasicategory == 'desa') {
            $this->categorytotal = "tps";
            $datalokasi = Tps::select('nomortps as nama')->where('desa_id', $this->lokasiid)->get();
            
        }
        else{
            $this->categorytotal = "kota";
            $datalokasi = Kota::select('Kota as nama')->get();
        } 
        return view('livewire.dashboard.table-caleg', compact('data','datalokasi'));
    }
}
