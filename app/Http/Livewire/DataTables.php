<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\User;
use Livewire\WithPagination;

class DataTables extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.data-tables',[
            'articles' => Article::paginate(3),
            'users' => User::paginate(2),
        ]);
    }

    //Using A Custom Pagination View
    // public function paginationView()
    // {
    //     return 'livewire.custom-pagination-links-view';
    // }
}
