<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){
        return [
            'name' => $this->faker->sentence($nbWords = 5),
            'code' => $this->faker->word,
            'content' => $this->faker->text,
            'added_on' => $this->faker->dateTime,
            'author' => $this->faker->name,
        ];
    }
}