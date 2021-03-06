<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Post extends Model
{
    use HasFactory, Notifiable;

    //$post->notify()
    protected $guarded = [];

    public function user() // return user_id
    {
        return $this->belongsTo(User::class);
    } 

    
    //if we waint to chang post identifire from id to dlug
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

        // v-24
        public function postcategory()
        {
            //post belong to one category
            return $this->belongsTo(Postcategory::class);
        }

        public function postauthor()  // auther_id == user_id
        {
            return $this->belongsTo(User::class, 'user_id');
        }
}
