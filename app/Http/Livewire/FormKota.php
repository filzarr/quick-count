<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kota;
class FormKota extends Component
{
    public function render()
    {
        $data = Kota::get();
        return view('livewire.form-kota', compact('data'));
    }
}
