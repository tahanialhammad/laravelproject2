<?php

use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\ArticlesController;
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
      return view('welcome',[
          'articles'=> App\Models\Article::take(3)->latest()->get(),
        //   'users' => User::all(),
        'users' => User::paginate(2),
      ]);
  });

  Route::get('/about', function () {
    return view('about',[
        'articles'=> App\Models\Article::take(3)->latest()->get()
    ]);
});

// Route::get('/articles', 'App\Http\Controllers\ArticlesController@index')->name('articles.index');
Route::post('/articles', 'App\Http\Controllers\ArticlesController@store');
Route::get('/articles/create', [App\Http\Controllers\ArticlesController::class, 'create'])->middleware(['auth']);
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
    return view('user.articles.index',[
        'articles'=> $category->articles,
        'cuurentCategory' => $category, // to desply cuurrent cat.
        'categories' => Category::all(), //tempraay
    ]);
}); //must be commit in step 3 v-39 but not wor



//blog by Authore L8FS  v-29 step 1
Route::get('/authors/{author}', function (user $author) {
    //dd($author);
    return view('user.articles.index',[
        'articles'=> $author->articles, //load the post reten by author
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
//but i dont like it becouse we need to update register form with username so i do that later










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