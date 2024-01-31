<?php

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{

    public $count = 0;

    public function render()
    {
        return view('livewire.contador');
    }

    public function increment($qty = 5){
        $this->count = $this->count + $qty;
    }

    public function decrement() {
        $this->count = $this->count - 1;
    }
}
