<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\User;

class LoadMore extends Component
{
    public $loadamount = 2;

    public function render()
    {
        $users = User::take($this->loadamount)->get();

        return view('livewire.load-more', compact('users'));
    }

    public function loadmore()
    {
        $this->loadamount +=1 ;
    }

}
