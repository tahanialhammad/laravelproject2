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

    public function livewirecomp()
    {
        $articles = Article::latest()->get();

        return view('user.livewirecomp.index', compact('articles'));
    }
}
