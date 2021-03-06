<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'category_id'=> Category::factory(),
            //'slug' => $this->faker->slug(), //not work
            //'tag' => $this->faker->word(), //not work
            'title'=>$this->faker->sentence(),
            'excerpt'=>$this->faker->sentence(),
            'body'=>$this->faker->paragraph(),
            'image' => $this->faker->imageUrl(640, 480, 'room', true)
        ];
    }
}
