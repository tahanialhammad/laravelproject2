<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use App\Notifications\NewPost;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //we accept article to make comment in it 
    public function store(Article $article, Request $request)
    {
        $users = User::all();
     // $users = User::find(1);



        //add commment to given post , then go to update the action v-56
        //dd($article); //after submit btn returen post data 
        //dd(request()->all()); //eveery thimg we need to the comment
        //in creat  whrite what comment need with assoceted post, post id automatcly


        //validation the request
        request()->validate([
            'body' => 'required'
        ]);

        $article->comments()->create([
            'user_id' => auth()->id(), //or the current user or
            // 'user_id' => auth()->user()->id(), or
            //'user_id' => request()->user()->id(),
            'body' => request('body'),
        ]);




 // Notification::send($user, new NewPost($request->body));
  User::find(1)->notify(new NewPost($request->body));


        return back(); // redirect back to the pervoice page 
        // come eeror with user id in model we must add    protected $guarded = []; in comment model
        //but i stil have error aboute Call to undefined method App\Models\User::id() , step one is work :  'user_id' => auth()->id(),
    }

    //OR $request varable 

    // public function store(Article $article, Request $request)
    // {
    //     $article->comments()->create([
    //         'user_id' => $request->user()->id(), 
    //         'body' => $request->input('body'),
    //     ]);
    // } 

}
