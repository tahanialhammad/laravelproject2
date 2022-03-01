<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Postcategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'postcategory_id'=> Postcategory::factory(),
            'slug' => $this->faker->slug(),
            'title'=>$this->faker->sentence(),
            'excerpt'=>$this->faker->sentence(),
            'body'=>$this->faker->paragraph(),
        ];
    }
}
