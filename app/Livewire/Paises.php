<?php

namespace App\Livewire;

use Livewire\Component;

class Paises extends Component
{
    public $paises = [
        'Peru',
        'Colombia',
        'Venezuela',
    ];

    public $pais;

    // public $active;
    public $count = 0;

    public function save(){
        array_push($this->paises, $this->pais);

        // $this->pais = '';
        $this->reset('pais');
    }

    public function render()
    {
        return view('livewire.paises');
    }

    // public function changeActive($pais){
    //     // dd($pais);
    //     $this->active = $pais;
    //     // dd($this->active);
    // }

    public function delete($index){
        unset($this->paises[$index]);
    }

    public function increment(){
        $this->count++;
    }


}
