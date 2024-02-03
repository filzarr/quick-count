<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ButtonForm extends Component
{
    public $text,$link;
    public function mount($text,$link){
        $this->text = $text;
        $this->link = $link;
    }
    public function render()
    {
        return view('livewire.button-form');
    }
}
