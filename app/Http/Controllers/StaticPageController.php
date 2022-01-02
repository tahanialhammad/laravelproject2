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

    //test wizard option
    public function showOption()
    {
        return view('user.wizard.index'); 
    }

    public function createoption(Request $request)
    {
    //dd(request()->all());

    $option =request()["option"];
    //dd($option);

        if ( $option == 'service'){
            return redirect(route('serviceoption'));
        }
        return redirect(route('wizardoption'));
    }

    public function serviceoption()
    {
        return view('user.wizard.serviceoption'); 
    }

    public function wizardoption()
    {
        return view('user.wizard.wizardoption'); 
    }

    public function loadmore(Request $request)
    {
        $articles = Article::paginate(3);

        if($request->ajax()){
            $view = view('data', compact('articles'))->render();
            return response()->json(['ntml' => $view]);
        }
        
        return view('user.ajax.index', compact('articles'));
    }
 
}
