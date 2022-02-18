<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {

        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }

//Search (The Messy Way) ; if user serch for somethig we get the search , if not we get nuu from dd

        // $articles = Article::latest();

       //dd(request('search'));

// if(request('search')){
//     // we r going tpo build post resut but with limitation , only the have result of search == posts where title is like 
//     // $articles->where('title', 'like', '%' . request('search') . '%'); //standerd sql syntax select * from posts where title linke '%dolar%' . to find any thing befor this text or after this
//     //serch in title or body 
//     $articles
//             ->where('title', 'like', '%' . request('search') . '%')
//             ->orWhere('body', 'like', '%' . request('search') . '%');
//     }

    // return view('user.articles.index', ['articles' => $articles->get()]);
    //Search (The Cleaner Way): in the controllerr maken method to get posts 

    // return view('user.articles.index', ['articles' => $articles->get()]);
    //return view('user.articles.index', ['articles' => $this->getArticles()]); // for /Search (The Cleaner Way )stap1 ,and step 2
   
    //for /Search (The Cleaner Way ) step 3 , inline scope method 
//    return view('user.articles.index', ['articles' => Article::latest()->filter()->get()]); //one action to handel all posts or filter posts
      
   //for /Search (The Cleaner Way )stap 4
   // check differnt between request string and request aaray 
//    dd(request('search'));
  // dd(request(['search'])); // return aaray key and vcalue what we search
   //or 
  // dd(request()->only('search'));

   return view('user.articles.index', ['articles' => Article::latest()->filter(request(['search']))->get()]); //one action to handel all posts or filter posts


    }

    public function show(Article $article) //now we ask for an $article=this mast be the same name in wildcard in router/articles/{article} , oud was $id
    {
        return view('user.articles.show', ['article' => $article]);
    }


    //this is new for Search (The Cleaner Way)
    protected function getArticles()
    {
        //step 1 for Search (The Cleaner Way)
        // $articles = Article::latest();
        
        // if(request('search')){
        //     $articles
        //             ->where('title', 'like', '%' . request('search') . '%')
        //             ->orWhere('body', 'like', '%' . request('search') . '%');
        //     }
        //     return $articles->get();

       //step 2 for Search (The Cleaner Way) uising query scop: by filter doen what user serch for , filter method is dont exist , but we can creat our query scop directly on eleqent modul  
       return $articles = Article::latest()->filter()->get();  //becouse its very small and clean , so we dont need this metthod , we can use this inline in step 3

    }

    public function create()
    {
        return view('user.articles.create', [
            'tags' => Tag::all(),
        ]);
    }

    public function store()
    {
        $article = new Article($this->validateArticle(['title', 'excerpt', 'body', 'image'])); //more secure
        $article->user_id = auth()->id();
        $article->save();
        $article->tags()->attach(request('tags'));
        return redirect(route('user.articles.index'));
    }

    public function edit(Article $article) //oud was $id
    {
        $this->authorize('update-article', $article);
        return view('user.articles.edit', [
            'article' => $article,
            'tags' => Tag::all(),
        ]);
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());
        return redirect($article->path());
    }
    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'image' =>'required'
        ]);
    }
    public function destroy()
    {
        //Delete the resource
    }
}
