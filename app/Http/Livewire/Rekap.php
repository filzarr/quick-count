<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\LampiranTps;
use App\Models\Tps;
use App\Models\Desa;
use Livewire\WithPagination;
class Rekap extends Component
{
    use WithPagination;
    public $kota;
    public $kotaid = '';
    public $kecamatan;
    public $kecamatanid = '';
    public $desa;
    public $desaid = '';
    public function resetSelect(){
        $this->kotaid = '';
        $this->kecamatanid = '';
        $this->desaid = '';
        $this->resetPage('tpsPage');
    }
    public function tes()
    {
        $this->resetPage('tpsPage');
    }
    public function render()
    {
        $this->kota = Kota::get();
        if ($this->kotaid > 0) {
            # code...
            $this->kecamatan = Kecamatan::where('kota_id', $this->kotaid)->get();
        }
        if ($this->kecamatanid > 0) {
            # code...
            $this->desa = Desa::where('kecamatan_id', $this->kecamatanid)->get();
        }
        return view('livewire.rekap', [
            'data' => LampiranTps::select('lampiran_tps.created_at', 'tps.nomortps','desas.desa','kecamatans.kecamatan','kotas.Kota')->leftJoin('tps', 'tps.id', '=', 'lampiran_tps.tps_id')
            ->leftJoin('desas', 'desas.id', '=', 'tps.desa_id')
            ->leftJoin('kecamatans', 'kecamatans.id', '=', 'desas.kecamatan_id')
            ->leftJoin('kotas', 'kotas.id', '=', 'kecamatans.kota_id')
            ->where('tps.desa_id', 'like', '%'.$this->desaid.'%')
            ->where('desas.kecamatan_id', 'like', '%'.$this->kecamatanid.'%')
            ->where('kecamatans.kota_id', 'like', '%'.$this->kotaid.'%')
            ->orderBy('tps.id')
            ->orderBy('desas.id')
            ->orderBy('kecamatans.id')
            ->orderBy('kotas.id')
            ->paginate(30,  ['*'], 'tpsPage'),
        ]);
    }
}
