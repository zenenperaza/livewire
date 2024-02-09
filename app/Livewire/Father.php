<?php

namespace App\Livewire;

use Livewire\Component;

class Father extends Component
{
    public $name = 'Zenen Peraza';

    public function redirigir(){
        // return redirect()->to('http://www.google.com');
        return $this->redirect('/prueba', navigate:true);
    }
    
    public function render()
    {
        return view('livewire.father');
    }
}
