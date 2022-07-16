<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use Carbon\Carbon;


class StaticPageController extends Controller
{
    public function info()
    {

$myuser = User::select('id', 'created_at')->get()->groupBy(function($myuser){
    return Carbon::parse($myuser->created_at)->format('M');
});

$months =[];
$monthCount =[];

foreach($myuser as $month => $values){
    $months[] = $month;
    $monthCount[]= count($values);
}



  //collection method ex https://laracasts.com/series/andrews-larabits/episodes/2
  //method 1 filter
  $collection1 = collect(['tahani', 'hashem', 'husein']);
  $filter1 = $collection1->filter(function($item){
    return substr($item, 0 , 1) == "h" ;

  });
    
//return $filter1->all();    

//collection filter with nested arry 
$collection2 = collect([
    [
        'name' => 'hashem',
        'plant' => 30
    ],
    [
        'name' => 'tahani',
        'plant' => 50
    ],
    [
        'name' => 'husein',
        'plant' => 80
    ],
]);
$filter2 = $collection2->filter(function($item){
  return $item['plant'] > 30 ; //returen item where plants is greter than 30

});
  
// return $filter2->all();    
//return $filter2->values()->all();  //or  


//Metghod 2 pluked
$collection3 = collect([
    [
        'state' => 'iraq',
        'capital' => 'baghadad',
        'topCity' => [
            'one' => 'basra',
            'two' => 'kerbala'
        ]
    ],
    [
        'state' => 'iran',
        'capital' => 'tehran',
        'topCity' => [
            'one' => 'asfhan',
            'two' => 'meshad'
        ]
    ],
    [
        'state' => 'labanon',
        'capital' => 'beruit',
        'topCity' => [
            'one' => 'hamra',
            'two' => 'geheta'
        ]
    ],
]);

$plucked3 = $collection3->pluck('state'); //return arry contain only state from nestested aary 

$plucked4 = $collection3->pluck('topCity.one');

//return $plucked3->all();
//return $plucked4->all();

//collection method 3 contains

$collection4 = collect(['tahani', 'hashem', 'husein']); 

$contains4 = $collection4->contains(function($item){
// return true or fasle :wil be false unless one item return true ;opesit of filter
return substr($item, 0 , 1) == "h" ; //if we use d then return 0 == array does not contain

});

//return $contains4; //return 1 becouse 2 item retun true 

//return $contains4? 'aary does contain' : 'arry does not contain';

// use nested aary
$collection5 = collect([
    [
        'name' => 'hashem',
        'plant' => 30
    ],
    [
        'name' => 'tahani',
        'plant' => 50
    ],
    [
        'name' => 'husein',
        'plant' => 80
    ],
]);

$contains5 = $collection5->contains(function($item){
    return $item['plant'] >100 ;
  
  });

  //return $contains5; // return nothing 

  //return $contains5 ? 'aary does contain' : 'arry does not contain'; //it return nothing so we use this text 

//Collection method 4 :partition
$collection6 = collect(['tahani', 'hashem', 'noor']); 

[$abovFive, $underFive] = $collection6->partition(function($item){
   return strlen($item) > 5 ; //retun item with more than 5 char , condition true
});

//return $abovFive->all();

//return $underFive->values()->all();

//Collection method 5 , this use elqewent  :chunk

$collection7 = collect([
    [
        'title' => 'new project',
        'author' => 'hashem'
    ],
    [
        'title' => 'wordpres',
        'author' => 'tahani'
    ],
    [
        'title' => 'kunst',
        'author' => 'noor'
    ],
]);

$chunks = $collection7->chunk(2);
//return $chunks->all();








        return view('user.info.index', ['myuser' => $myuser, 'months'=>$months, 'monthCount'=>$monthCount]);

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

    public function bsvuejs()
    {
        return view('user.bsvuejs.index'); 
    }


 
}
