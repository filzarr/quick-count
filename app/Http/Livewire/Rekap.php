<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\LampiranTps;
use App\Models\Tps;
use App\Models\Desa;
use App\Models\DataInput;
use Livewire\WithPagination;
use Excel;
use App\Exports\RekapExport;
class Rekap extends Component
{
    use WithPagination;
    public $kota;
    public $kotaid = '';
    public $kecamatan;
    public $kecamatanid = '';
    public $desa;
    public $desaid = '';
    protected $queryString = ['kotaid','kecamatanid','desaid'];
    public function resetSelect(){
        $this->kotaid = '';
        $this->kecamatanid = '';
        $this->desaid = '';
        $this->resetPage('tpsPage');
    }
    public function updatingkotaid()
    {
        $this->resetPage('tpsPage');
    }
    public function updatingdesaid()
    {
        $this->resetPage('tpsPage');
    }
    public function updatingkecamatanid()
    {
        $this->resetPage('tpsPage');
    }
    public function exportexcel(){
        return Excel::download(new RekapExport($this->kotaid,$this->kecamatanid,$this->desaid), 'Rekap-Input.xlsx');
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
        // Query database hanya ketika filter berubah
        $lampiranTpsQuery = DataInput::select('data_inputs.created_at', 'data_inputs.tps_id', 'tps.nomortps','desas.desa','kecamatans.kecamatan','kotas.Kota')
            ->leftJoin('tps', 'tps.id', '=', 'data_inputs.tps_id')
            ->leftJoin('desas', 'desas.id', '=', 'tps.desa_id')
            ->leftJoin('kecamatans', 'kecamatans.id', '=', 'desas.kecamatan_id')
            ->leftJoin('kotas', 'kotas.id', '=', 'kecamatans.kota_id');
    
        // Filter berdasarkan kondisi
        if ($this->desaid) {
            $lampiranTpsQuery->where('tps.desa_id', $this->desaid );
        }
        if ($this->kecamatanid) {
            $lampiranTpsQuery->where('desas.kecamatan_id', $this->kecamatanid );
        }
        if ($this->kotaid) {
            $lampiranTpsQuery->where('kecamatans.kota_id', $this->kotaid );
        }
    
        // Pagination
        $data = $lampiranTpsQuery->orderBy('tps.id')
            ->orderBy('desas.id')
            ->orderBy('kecamatans.id')
            ->orderBy('kotas.id')
            ->paginate(20,['*'], 'tpsPage')
            ->appends([
                'kotaid' => $this->kotaid,
                'kecamatanid' => $this->kecamatanid,
                'desaid' => $this->desaid,
            ])
            ->setPath(route('rekap'));
            $data->withPath('rekap-tps');
        return view('livewire.rekap', [
            'data' => $data,
        ]);
    }
}
