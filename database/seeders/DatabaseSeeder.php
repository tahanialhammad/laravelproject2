<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed database V-27. php artisan migrate:fresh --seed {to reseed}
     * 
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Category::truncate();


       User::factory(2)->create();
       \App\Models\Tag::factory(2)->create();

        \App\Models\Article::factory(2)->create();
        // \App\Models\Tag::factory(5)->create([
        //     'name' => 'defalut tag'
        // ]);
        // Tag::create([
        //     'name' => 'php',
        // ]);
        // Category::create([
        //     'name' => 'css',
        // ]);
  
        // Category::factory(5)->create(); //becouse ther is no factory L8FS  V-28
        // we can use this as defauilt data
        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
        // Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);
        // Category::create([
        //     'name' => 'Hoppy',
        //     'slug' => 'hoppy'
        // ]);
    }
}
