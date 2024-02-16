<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use App\Models\Kota;
use App\Models\Partai;
use App\Models\Caleg;
use App\Models\CountCaleg;
use App\Models\CountPartai;
use App\Models\Desa;
use App\Models\Tps;
use App\Models\Kecamatan;
use App\Models\LampiranTps;
use App\Models\DataPemilih;
use App\Models\DataInput;
use DB;
class DataExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public $idcategory;
    public $kat;
    public function __construct($idcategory, $kat){
        $this->idcategory = $idcategory;
        $this->kat = $kat;
    }
    public function view(): View
    {
        $namakota = [];
        $namakecamatan = [];
        $namadesa = [];
        $data = Partai::select('id', 'partai')
        ->with([
            'calegs' => function ($query) {
                $query->select('id', 'namacaleg', 'partai_id')
                ->get(); 
            }
        ])
        ->get();
        if ($this->kat == 'kota') {
            $namakota = Kota::where('id', $this->idcategory)->first();
        }
        elseif($this->kat == 'kecamatan'){
            $namakecamatan = Kecamatan::where('id', $this->idcategory)->first();
            $namakota = Kota::where('id', $namakecamatan->kota_id)->first();
        }
        elseif($this->kat == 'desa'){
            $namadesa = Desa::where('id', $this->idcategory)->first();
            $namakecamatan = Kecamatan::where('id', $namadesa->kecamatan_id)->first();
            $namakota = Kota::where('id', $namakecamatan->kota_id)->first();
        }
        foreach ($data as $partai) {
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
                    select(DB::raw('tps.nomortps as lokasi, tps.id as tps_id, COALESCE(SUM(count_calegs.suara),0) as suara'))
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
      
            foreach ($data as $partai) {
                if ($this->kat == 'kota') {
                    $a = CountPartai::select(DB::raw('COALESCE(SUM(count_partais.suara),0) as suarapartai'))
                    ->leftJoin('tps', 'count_partais.tps_id', '=', 'tps.id')
                    ->leftJoin('desas', 'tps.desa_id', '=', 'desas.id')
                    ->leftJoin('kecamatans', 'desas.kecamatan_id', '=', 'kecamatans.id')
                    ->where('partai_id', $partai->id)
                    ->where('kecamatans.kota_id', $this->idcategory)
                    ->first();
                    $partai->suarapartai = $a->suarapartai;
                }
                elseif($this->kat == 'kecamatan'){
                    $a = CountPartai::select(DB::raw('COALESCE(SUM(count_partais.suara),0) as suarapartai'))
                    ->leftJoin('tps', 'count_partais.tps_id', '=', 'tps.id')
                    ->leftJoin('desas', 'tps.desa_id', '=', 'desas.id')
                    ->where('partai_id', $partai->id)
                    ->where('desas.kecamatan_id', $this->idcategory)
                    ->first();
                    $partai->suarapartai = $a->suarapartai;
                }
                elseif($this->kat == 'desa'){
                    $a = CountPartai::select(DB::raw('COALESCE(SUM(count_partais.suara),0) as suarapartai'))
                    ->leftJoin('tps', 'count_partais.tps_id', '=', 'tps.id')
                    ->where('partai_id', $partai->id)
                    ->where('tps.desa_id', $this->idcategory)
                    ->first();
                    $partai->suarapartai = $a->suarapartai;
                }
                else{
                    $a = CountPartai::select(DB::raw('COALESCE(SUM(count_partais.suara),0) as suarapartai'))
                    ->where('partai_id', $partai->id)
                    ->first();
                    $partai->suarapartai = $a->suarapartai;
                }

            }
           
            return view('pages.excel', compact('data','namakota','namakecamatan','namadesa'));
    }
}
