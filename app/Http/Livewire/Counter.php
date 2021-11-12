<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    //public prop , this wil automaticly passed to view 
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }
    
    public function decrement()
    {
        $this->count--;
    }
    
    public function render()
    {
        return view('livewire.counter');
    }
}
