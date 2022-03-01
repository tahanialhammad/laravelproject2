<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
    use HasFactory, Notifiable;
   // protected $guarded = []; dont need we can go to app/providers/appservice

    public function article()  //comment assoseted with the post , retern post_id 
    {
        return $this->belongsTo(Article::class);
    }

    public function author()  // auther_id == user_id
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
