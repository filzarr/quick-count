<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Kota;
use App\Models\Partai;
use App\Models\Caleg;
use App\Models\CountCaleg;
use App\Models\CountPartai;
use App\Models\Desa;
use App\Models\Tps;
use App\Models\Kecamatan;
use DB;
class Layout extends Component
{
    public $kat;
    public $data;
    public $idcategory;
    protected $listeners = ['changefilters'];
    public function changefilters($request){
        $this->idcategory = $request['idcategory'];
        $this->kat = $request['category'];
    }
    public function render()
    {
        
        $this->data = Partai::select('id', 'partai')
        ->with([
            'calegs' => function ($query) {
                $query->select('id', 'namacaleg', 'partai_id')
                ->get(); 
            }
        ])
        ->get();
        foreach ($this->data as $partai) {
            foreach ($partai->calegs as $caleg) {
                if ($this->kat == 'kota') {
                    $caleg->lokasi = Kecamatan::
                    select(DB::raw('kecamatans.kecamatan as lokasi, COALESCE(SUM(count_calegs.suara),0) as suara'))
                    ->leftJoin('desas', 'kecamatans.id','=','desas.kecamatan_id')
                    ->leftJoin('tps', 'desas.id','=','tps.desa_id')
                    ->leftJoin('count_calegs', function ($join) use ($caleg) {
                        $join->on('tps.id', '=', 'count_calegs.tps_id')
                            ->where('count_calegs.caleg_id', $caleg->id);
                    })->where('kecamatans.kota_id', $this->idcategory)->groupBy('kecamatans.id')->get();
                }
                elseif($this->kat == 'kecamatan'){
                    $caleg->lokasi = Desa::
                    select(DB::raw('desas.desa as lokasi, COALESCE(SUM(count_calegs.suara),0) as suara'))
                    ->leftJoin('tps', 'desas.id','=','tps.desa_id')
                    ->leftJoin('count_calegs', function ($join) use ($caleg) {
                        $join->on('tps.id', '=', 'count_calegs.tps_id')
                            ->where('count_calegs.caleg_id', $caleg->id);
                    })->where('desas.kecamatan_id', $this->idcategory)->groupBy('desas.id')->get();
                }
                elseif($this->kat == 'desa'){
                    $caleg->lokasi = Tps::
                    select(DB::raw('tps.nomortps as lokasi, COALESCE(SUM(count_calegs.suara),0) as suara'))
                    ->leftJoin('count_calegs', function ($join) use ($caleg) {
                        $join->on('tps.id', '=', 'count_calegs.tps_id')
                            ->where('count_calegs.caleg_id', $caleg->id);
                    })->where('tps.desa_id', $this->idcategory)->groupBy('tps.id')->get();
                }
                else{

                    $caleg->lokasi = Kota::
                    select(DB::raw('kotas.Kota as lokasi, COALESCE(SUM(count_calegs.suara),0) as suara'))
                    ->leftJoin('kecamatans', 'kotas.id','=','kecamatans.kota_id')
                    ->leftJoin('desas', 'kecamatans.id','=','desas.kecamatan_id')
                    ->leftJoin('tps', 'desas.id','=','tps.desa_id')
                    ->leftJoin('count_calegs', function ($join) use ($caleg) {
                        $join->on('tps.id', '=', 'count_calegs.tps_id')
                            ->where('count_calegs.caleg_id', $caleg->id);
                    })->groupBy('kotas.id')->get();
                }
            }
        }
      
            foreach ($this->data as $partai) {
                if ($this->kat == 'kota') {
                    $a = CountPartai::select(DB::raw('COALESCE(SUM(count_partais.suara),0) as suarapartai'))
                    ->leftJoin('tps', 'count_partais.tps_id', '=', 'tps.id')
                    ->leftJoin('desas', 'tps.desa_id', '=', 'desas.id')
                    ->leftJoin('kecamatans', 'desas.kecamatan_id', '=', 'kecamatans.id')
                    ->where('partai_id', $partai->id)
                    ->where('kecamatans.kota_id', $this->idcategory)
                    ->first();
                    $partai->suarapartai = $a->suarapartai;
                }else{
                    $a = CountPartai::select(DB::raw('COALESCE(SUM(count_partais.suara),0) as suarapartai'))
                    ->where('partai_id', $partai->id)
                    ->first();
                    $partai->suarapartai = $a->suarapartai;
                }

            }
            $this->dispatchBrowserEvent('contentChanged');
        return view('livewire.dashboard.layout');
    }
}
