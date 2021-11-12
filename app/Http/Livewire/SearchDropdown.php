<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search;
    public $searchResults = [];

    public function updatedSearch($newValue)
    {

        //add  iTunes Search API link for nap data firstly hard code and giv a limt , dd respons  , we cut this to update function to make render clean
        // $response = Http::get('https://itunes.apple.com/search/?term=' . 'hier must be seacrh varavle' . '&limit=10');
        // dd($response->json()); i dont recive data in array
        
        // use varable to serach vor $newValue
        // $response = Http::get('https://itunes.apple.com/search/?term=' . $this->search . '&limit=10');
        // $this->searchResults = $response->json()['results']; // serchresult == response json and we want result key
        // dump( $this->searchResults); // give all result , then go to view and loop throught result


        // we not make request antel anless 3 charter
        if (strlen($this->search) < 3) {
            $this->searchResults = [];

            return;
        }

        $response = Http::get('https://itunes.apple.com/search/?term=' . $this->search . '&limit=10');

        $this->searchResults = $response->json()['results'];
    }


    public function render()
    {
        //add  iTunes Search API link for nap data firstly hard code and giv a limt , dd respons  , we cut this to update function to make render clean
        // $response = Http::get('https://itunes.apple.com/search/?term=' . 'hier must be seacrh varavle' . '&limit=10');
        // dd($response->json()); i dont recive data in array

        return view('livewire.search-dropdown');
    }
}
