<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database. php artisan migrate:fresh --seed
     * 
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();
        \App\Models\Article::factory(5)->create();
        \App\Models\Tag::factory(5)->create();
        \App\Models\Category::factory(5)->create();
    }
}
