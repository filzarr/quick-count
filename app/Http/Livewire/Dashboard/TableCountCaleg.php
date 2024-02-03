<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\Tps;
use App\Models\CountCaleg;
use DB;
class TableCountCaleg extends Component
{
    public $lokasiid;
    public $categorylokasi;
    public $caleg_id;
    public function mount($lokasi, $categorylokasi,$caleg_id){
        $this->lokasiid = $lokasi;
        $this->categorylokasi = $categorylokasi;
        $this->caleg_id = $caleg_id;
    }
    public function render()
    {
        if ($this->categorylokasi === 'kota') {
            $total = Kota::select(DB::raw('SUM(count_calegs.suara) AS suara'))
            ->leftJoin('kecamatans', 'kotas.id', '=','Kecamatans.kota_id')
            ->leftJoin('desas', 'kecamatans.id','=','desas.kecamatan_id')
            ->leftJoin('tps', 'desas.id', '=', 'tps.desa_id')
            ->leftJoin('count_calegs', 'tps.id','=','count_calegs.tps_id')
            ->where('kotas.id', $this->lokasiid)
            ->where('count_calegs.caleg_id', '=' ,$this->caleg_id)->get();
        }
        elseif ($this->categorylokasi === 'kecamatan') {
            $total = Kecamatan::select(DB::raw('SUM(count_calegs.suara) AS suara'))
            ->leftJoin('desas', 'kecamatans.id','=','desas.kecamatan_id')
            ->leftJoin('tps', 'desas.id', '=', 'tps.desa_id')
            ->leftJoin('count_calegs', 'tps.id','=','count_calegs.tps_id')
            ->where('kecamatans.id', $this->lokasiid)
            ->where('count_calegs.caleg_id','=' ,$this->caleg_id)->get();
        }
        elseif ($this->categorylokasi === 'desa') {
            $total = Desa::select(DB::raw('SUM(count_calegs.suara) AS suara'))
            ->leftJoin('tps', 'desas.id', '=', 'tps.desa_id')
            ->leftJoin('count_calegs', 'tps.id','=','count_calegs.tps_id')
            ->where('desas.id', $this->lokasiid)
            ->where('count_calegs.caleg_id','=',$this->caleg_id)->get();
        }
        elseif ($this->categorylokasi === 'tps') {
            $total = Tps::select(DB::raw('SUM(count_calegs.suara) AS suara'))
            ->leftJoin('count_calegs', 'tps.id','=','count_calegs.tps_id')
            ->where('tps.id', $this->lokasiid)
            ->where('count_calegs.caleg_id', '=',$this->caleg_id)->get();
        }
        return view('livewire.dashboard.table-count-caleg', compact('total'));
    }
}
