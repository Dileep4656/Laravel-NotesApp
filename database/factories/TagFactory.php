<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// this is a feeder for tags

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tag_name' => 'Tag '.$this->faker->unique()->randomDigit
        ];
    }
}
