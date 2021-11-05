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

        return view('user.articles.index', ['articles' => $articles]);
    }

    public function show(Article $article) //now we ask for an $article=this mast be the same name in wildcard in router/articles/{article} , oud was $id
    {
        return view('user.articles.show', ['article' => $article]);
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
