<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Partai;
use App\Models\Caleg;
use DB;
class TotalSuaraPartai extends Component
{
    public $partai;
    public $idpartai;
    public $category;
    public $category_id;
    public function mount($partai,$idepartai,$category,$category_id){
        $this->partai = $partai;
        $this->idpartai = $idepartai;
        $this->category = $category;
        $this->category_id = $category_id;
    }
    public function render()
    {
        if ($this->category == 'kota') {
            $totalpartai = Partai::select(DB::raw('COALESCE(SUM(count_partais.suara), 0) as suara'))
            ->leftJoin('count_partais', 'partais.id', '=', 'count_partais.partai_id')
            ->leftJoin('tps', 'count_partais.tps_id', '=', 'tps.id')
            ->leftJoin('desas', 'desas.id', '=', 'tps.desa_id')
            ->leftJoin('kecamatans', 'kecamatans.id', '=', 'desas.kecamatan_id')
            ->where('partais.id', $this->idpartai)
            ->where('kecamatans.kota_id', $this->category_id)
            ->first();
            $totalpartaicaleg = Caleg::select(DB::raw('COALESCE(SUM(count_calegs.suara), 0) as suara'))
            ->leftJoin('count_calegs', 'calegs.id', '=', 'count_calegs.caleg_id')
            ->leftJoin('tps', 'count_calegs.tps_id', '=', 'tps.id')
            ->leftJoin('desas', 'desas.id', '=', 'tps.desa_id')
            ->leftJoin('kecamatans', 'kecamatans.id', '=', 'desas.kecamatan_id')
            ->where('calegs.partai_id', $this->idpartai)
            ->where('kecamatans.kota_id', $this->category_id)
            ->first();
        }
        elseif ($this->category == 'kecamatan') {
            $totalpartai = Partai::select(DB::raw('COALESCE(SUM(count_partais.suara), 0) as suara'))
            ->leftJoin('count_partais', 'partais.id', '=', 'count_partais.partai_id')
            ->leftJoin('tps', 'count_partais.tps_id', '=', 'tps.id')
            ->leftJoin('desas', 'desas.id', '=', 'tps.desa_id')
            ->where('partais.id', $this->idpartai)
            ->where('desas.kecamatan_id', $this->category_id)
            ->first();
            $totalpartaicaleg = Caleg::select(DB::raw('COALESCE(SUM(count_calegs.suara), 0) as suara'))
            ->leftJoin('count_calegs', 'calegs.id', '=', 'count_calegs.caleg_id')
            ->leftJoin('tps', 'count_calegs.tps_id', '=', 'tps.id')
            ->leftJoin('desas', 'desas.id', '=', 'tps.desa_id')
            ->where('calegs.partai_id', $this->idpartai)
            ->where('desas.kecamatan_id', $this->category_id)
            ->first();
        }
        elseif ($this->category == 'desa') {
            $totalpartai = Partai::select(DB::raw('COALESCE(SUM(count_partais.suara), 0) as suara'))
            ->leftJoin('count_partais', 'partais.id', '=', 'count_partais.partai_id')
            ->leftJoin('tps', 'count_partais.tps_id', '=', 'tps.id')
            ->where('partais.id', $this->idpartai)
            ->where('tps.desa_id', $this->category_id)
            ->first();
            $totalpartaicaleg = Caleg::select(DB::raw('COALESCE(SUM(count_calegs.suara), 0) as suara'))
            ->leftJoin('count_calegs', 'calegs.id', '=', 'count_calegs.caleg_id')
            ->leftJoin('tps', 'count_calegs.tps_id', '=', 'tps.id')
            ->where('calegs.partai_id', $this->idpartai)
            ->where('tps.desa_id', $this->category_id)
            ->first();
        }
        else{
            $totalpartai = Partai::select(DB::raw('COALESCE(SUM(count_partais.suara)) as suara'))
            ->leftJoin('count_partais', 'partais.id', '=', 'count_partais.partai_id')
            ->where('partais.id', $this->idpartai)
            ->first();
            $totalpartaicaleg = Caleg::select(DB::raw('COALESCE(SUM(count_calegs.suara), 0) as suara'))
            ->leftJoin('count_calegs', 'calegs.id', '=', 'count_calegs.caleg_id')
            ->where('calegs.partai_id', $this->idpartai)
            ->first();
        }
        return view('livewire.dashboard.total-suara-partai',compact('totalpartai','totalpartaicaleg'));
    }
}
