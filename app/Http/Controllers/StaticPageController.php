<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class StaticPageController extends Controller
{
    public function info()
    {
        return view('user.info.index');
    }

    public function vuejs()
    {
        return view('user.vuejs.index');
    }

    public function livewirecomp()
    {
        $articles = Article::paginate(3);
        
       
        return view('user.livewirecomp.index', compact('articles'));
    }

    public function mytooltip()
    {
        return view('user.mytooltip.index');
    }

    
}
