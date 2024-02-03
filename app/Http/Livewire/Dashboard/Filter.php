<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Desa;
class Filter extends Component
{
    public $idkota = "0";
    public $idkecamatan;
    public $iddesa;
    public $kategori;
    public function kirimfilter($kategori){
        $this->kategori = $kategori;
            if ($kategori == 'kota') {
                $this->emitUp('changefilters',[
                    'idcategory' => $this->idkota,
                    'category' => $this->kategori
                ]);
            }
            elseif ($kategori == "kecamatan") {
                $this->emitUp('changefilters',[
                    'idcategory' => $this->idkecamatan,
                    'category' => $this->kategori
                ]);
            }
            elseif ($kategori == 'desa') {
                $this->emitUp('changefilters',[
                    'idcategory' => $this->iddesa,
                    'category' => $this->kategori
                ]);
            }
            else{
                $this->emitUp('changefilters',[
                    'idcategory' => $this->idkota,
                    'category' => $this->kategori
                ]);
            }


    }
    public function resetSelect()
    {
        $this->idkota = "0";
        $this->idkecamatan = null;
        $this->iddesa = null;
        $this->emitUp('changefilters',[
            'idcategory' => $this->idkota,
            'category' => ''
        ]);
        $this->applyFilters(); // Terapkan kembali filter setelah direset
    }

    public function applyFilters()
    {
        $kota = Kota::get();
        $kecamatan = Kecamatan::where('kota_id', $this->idkota)->get();
        $desa = Desa::where('kecamatan_id', $this->idkecamatan)->get();

        $this->emit('filtersApplied', compact('kota', 'kecamatan', 'desa'));
    }

    public function render()
    {
        $kota = Kota::get();
        $kecamatan = Kecamatan::where('kota_id', $this->idkota)->get();
        $desa = Desa::where('kecamatan_id', $this->idkecamatan)->get();
        return view('livewire.dashboard.filter', compact('kota','kecamatan','desa'));
    }
}
