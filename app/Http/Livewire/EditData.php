<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Partai;
use App\Models\Caleg;
use App\Models\CountCaleg;
use App\Models\CountPartai;
use App\Models\DataPemilih;
use App\Models\LampiranTps;
use App\Models\DataInput;
use Livewire\WithFileUploads;
use Alert;
class EditData extends Component
{
    use WithFileUploads;
    public $tpsid;
    public $caleg;
    public $partai;
    public $lampiran;
    public $datadiri;
    public $nama;
    public $noHp;
    public $suarapartai;
    public $countall;
    public $lampiranfile;
    public $calegsid;
    public $suaracalegs = [];
    public function mount($tpsid){
        $this->tpsid = $tpsid;
        $this->datadiri = DataInput::where('tps_id', $this->tpsid)->first();
        $this->caleg = Caleg::get();
        $this->partai = Partai::first();
        
      
            $this->partai['suara'] = CountPartai::where('partai_id', $this->partai->id)->where('tps_id', $this->tpsid)->first();
      
        foreach($this->caleg as $item){
            $a = CountCaleg::select('suara')->where('caleg_id', $item->id)
            ->where('tps_id', $this->tpsid)->first();
            $item->suara = $a->suara;
        }
        for ($i=0; $i <= 9 ; $i++) { 
            $this->suaracalegs[$i] = $this->caleg[$i]->suara;
        }
        for ($i=0; $i <=9 ; $i++) { 
            $this->calegsid[$i] =  $this->caleg[$i]->id;
        }
        $this->lampiranfile = LampiranTps::where('tps_id', $this->tpsid)->first();
        $this->lampiranfile = $this->lampiranfile->file;
        // dd($this->lampiran);
        $this->nama = $this->datadiri->nama;
        $this->noHp = $this->datadiri->noHp;
        $this->suarapartai = $this->partai->suara->suara;

    }
    public function submit(){
        for ($i=0; $i <=9 ; $i++) { 

            $this->suaracalegs[$i] = (int)$this->suaracalegs[$i];
       
        }
        DataInput::where('tps_id', $this->tpsid)->update([
            'nama' => $this->nama,
            'noHp' => $this->noHp,
        ]);
        CountPartai::where('tps_id', $this->tpsid)->update([
            'suara' => $this->suarapartai,
        ]);
        for ($i=0; $i <=9 ; $i++) { 
            CountCaleg::where('tps_id',$this->tpsid)->where('caleg_id', $this->calegsid[$i])
            ->update([
                'suara' => (int)$this->suaracalegs[$i],
            ]);
        }
        if ($this->lampiran !=  null) {
            $img =md5($this->lampiran . microtime()).'.'.$this->lampiran->extension();
            $this->lampiran->storeAs('lampiran/', $img,'public');
            LampiranTps::where('tps_id', $this->tpsid)->update([
                'file' => $img,
            ]);
        }
        Alert::success('Berhasil Mengupdate Data');
        return redirect('/rekap-tps');
    }
    public function render()
    {
        $this->countall = (int)$this->suarapartai;
        for ($i=0; $i <=9 ; $i++) { 
            # code...
            $this->countall = $this->countall + (int)$this->suaracalegs[$i];
        }
        return view('livewire.edit-data');
    }
}
