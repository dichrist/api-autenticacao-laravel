<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    
    protected $model;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'text' => $this->faker->text()
        ];
    }
}
