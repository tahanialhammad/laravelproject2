<?php

use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use App\Models\Postcategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CommentController;
use App\Models\Post;
use App\Notifications\News;
use App\Notifications\NewPost;
use PharIo\Manifest\Author;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'articles' => App\Models\Article::take(3)->latest()->get(),
        //   'users' => User::all(),
        'users' => User::paginate(2),
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Models\Article::take(3)->latest()->get()
    ]);
});

// Route::get('/articles', 'App\Http\Controllers\ArticlesController@index')->name('articles.index');
Route::post('/articles', 'App\Http\Controllers\ArticlesController@store');
Route::get('/articles/create', [App\Http\Controllers\ArticlesController::class, 'create'])->middleware(['auth']); // upade in L8FS <V-62></V-62>
Route::get('/articles/{article}', 'App\Http\Controllers\ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'App\Http\Controllers\ArticlesController@edit');
Route::put('/articles/{article}', 'App\Http\Controllers\ArticlesController@update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Start Laravel Project
//Blog Articles
Route::get(
    '/articles',
    [ArticlesController::class, 'index']
)->name('user.articles.index');

// category wildcard name == varable name
// Route::get('/categories/{category}', function (Category $category) {
//     return view('user.articles.index',[
//         'articles'=> $category->articles
//     ]);
// });
//to use slug attrbuit not only id in the link
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('user.articles.index', [
        'articles' => $category->articles,
        'cuurentCategory' => $category, // to desply cuurrent cat.
        'categories' => Category::all(), //tempraay
    ]);
}); //must be commit in step 3 v-39 but not wor


//Search within category in V-42-43 LATER
//blog by Authore L8FS  v-29 step 1
Route::get('/authors/{author}', function (user $author) {
    //dd($author);
    return view('user.articles.index', [
        'articles' => $author->articles, //load the post reten by author
        'categories' => Category::all(), //tempraay
    ]);
});

//blog by Authore name L8FS v-29 step 2 that need uinqe username , so we add that to user table 
// Route::get('/authors/{author:username}', function (user $author) {
//     //dd($author);
//     return view('user.articles.index',[
//         'articles'=> $author->articles //load the post reten by author
//     ]);
// });
//but i dont like it becouse i need to update register form with username so i do that later that can by update user registereation from V-45 - V-51


//comment specfcly to post in url  L8FS v-56 is beter to do that in comment controller not in ARTICLECONTROLER , he use post:slug but i dont have slug so i use id also in the form
Route::post('articles/{article:id}/comments', [CommentController::class, 'store']);


//subscribe email, newsletter update later fron L8FS V-58,59,60,61




//Static Page
Route::get(
    '/info',
    [StaticPageController::class, 'info']
)->name('info');

//tooltip
Route::get(
    '/mytooltip',
    [StaticPageController::class, 'mytooltip']
)->name('mytooltip');


//livewire
Route::get(
    '/livewirecomp',
    [StaticPageController::class, 'livewirecomp']
)->name('livewirecomp');

//contact form in blade dont needed
Route::post('/contact', function (Request $request) {
    $contact = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
    ]);

    Mail::to('tahanina2014@yahoo.com.com')->send(new ContactFormMailable($contact));

    return back()->with('success_message', 'We received your message successfully and will get back to you shortly!');
});


//Vue
Route::get(
    '/vuejs',
    [StaticPageController::class, 'vuejs']
)->name('vuejs');


//wizard option 
Route::get('wizard', [StaticPageController::class, 'showOption'])->name('wizard');
Route::post('createoption', [StaticPageController::class, 'createoption'])->name('createoption');

Route::get('serviceoption', [StaticPageController::class, 'serviceoption'])->name('serviceoption');
Route::get('wizardoption', [StaticPageController::class, 'wizardoption'])->name('wizardoption');

//load more ajax
//  Route::get('loadmore2', [LoadMoreController::class, 'index'])->name('loadmore');


//bootstrap with vuejs
Route::get('bsvuejs', [StaticPageController::class, 'bsvuejs'])->name('bsvuejs');

Route::get('loadmore', [StaticPageController::class, 'loadmore'])->name('loadmore');




//Blog V2
Route::get('/posts', function () {
    return view('user.blog.index', [
        // 'posts' => Post::all(),
        'posts' => Post::latest()->with('postcategory', 'postauthor')->get(),
    ]);
});

//use post->id in link
// Route::get('/posts/{post}', function (Post $post) {
//     return view('user.blog.show',[
//         'post' =>  $post,
//     ]);
// });

//use post->slug L8FS v23 , finde post according to slug, 
//Post::where('slug',$post)->first();
Route::get('/posts/{post:slug}', function (Post $post) {
    return view('user.blog.show', [
        'post' =>  $post,
    ]);
});

// category wildcard name == varable name
// Route::get('/postcategories/{postcategory}', function (Postcategory $postcategory) {
//     return view('user.blog.index',[
//         'posts'=> $postcategory->posts // grap all post belong to this category
//     ]);
// });
//to use slug attrbuit not only id in the link
Route::get('/postcategories/{postcategory:slug}', function (Postcategory $postcategory) {
    return view('user.blog.index', [
        'posts' => $postcategory->posts,
        'cuurentCategory' => $postcategory, // to desply cuurrent cat.
        'postcategory' => Postcategory::all(), //tempraay
    ]);
}); //must be commit in step 3 v-39 but not wor

//blog by Authore L8FS  v-29 step 1
// Route::get('/authors/{author}', function (user $author) {
//     //dd($author);
//     return view('user.blog.index',[
//         'posts'=> $author->posts, //load the post reten by author

//     ]);
// });






//Voeting App

Route::get('/voting', function () {
    return view('user.votingapp.index');
});




//news
//this work
// Route::get('/news', function () {
//     $user = User::find(1);

//      User::find(1)->notify(new News);
//     return view('user.news.index');
// });

//tray this
Route::get('/news', function () {
    // $newpost = Post::first();
    //  User::find(1)->notify(new NewPost($newpost));
    return view('user.news.index');
});


//mark as read
Route::get('/markAsRead', function () {

    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markRead');
