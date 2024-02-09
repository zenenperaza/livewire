<?php

namespace App\Livewire;

use Livewire\Component;

class Father extends Component
{
    public $name = 'Zenen Peraza';
    
    public function render()
    {
        return view('livewire.father');
    }
}
