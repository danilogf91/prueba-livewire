<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $message = 'Hello, World!';

    public function render()
    {
        return view('livewire.hello-world');
    }
}
