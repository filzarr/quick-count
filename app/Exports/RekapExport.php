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
class RekapExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public $desaid;
    public $kotaid;
    public $kecamatanid;
    public function __construct($kotaid, $kecamatanid,$desaid){
        $this->kotaid = $kotaid;
        $this->kecamatanid = $kecamatanid;
        $this->desaid = $desaid;
    }
    public function view() : View
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
        $lampiranTpsQuery = DataInput::select('data_inputs.created_at', 'tps.nomortps','desas.desa','kecamatans.kecamatan','kotas.Kota')
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
            ->get();
        return view('pages.excel-rekap', compact('data'));

    }
}
