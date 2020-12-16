<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = "Jelly";
    public $loud = false;
    public $greeting = 'Adios';

    public function render()
    {
        return view('livewire.hello-world');
    }
}
