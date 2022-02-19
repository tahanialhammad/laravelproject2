<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;

class Article extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded =[];


     //step 2 for Search (The Cleaner Way) uising query scop: name of function scope+name of the quer scope,
        // public function scopeFilter($query) // result Post::newQuery()->Filter() ;  this method recevie query builder 
        // {
        //    // we tray to use : $query->where......

        //       if(request('search')){
        //     $query
        //             ->where('title', 'like', '%' . request('search') . '%')
        //             ->orWhere('body', 'like', '%' . request('search') . '%');
        //     }
        
        // }


        //step 4  accpet a list of filter , array 
        public function scopeFilter($query, array $filters) 
        {
            //if is set , but in php 8 using ?? false (null save operater ) to handel if there is no search key in filter array 
            //this is usfel if we have another fuilter we can add hier
            //   if($filters['search'] ?? false){
            // $query
            //         ->where('title', 'like', '%' . request('search') . '%')
            //         ->orWhere('body', 'like', '%' . request('search') . '%');
            // }

            //step 5 advanced by using method build in queryBuilder : when we have search filter then trigger this function 
        $query->when($filters['search'] ?? false, function($query, $search){
                    $query
                    ->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
        });

        //step 6 with arrow function not work 
        // $query->when($filters['search'] ?? false, fu($query, $search) =>
        //     $query
        //     ->where('title', 'like', '%' . $search . '%')
        //     ->orWhere('body', 'like', '%' . $search . '%'));

        }

    public function path()
    {
        return route('articles.show', $this);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

}
