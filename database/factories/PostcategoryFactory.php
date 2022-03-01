<?php

namespace Database\Factories;

use App\Models\Postcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostcategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Postcategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->word(),
            'slug'=>$this->faker->slug()
        ];
    }
}
