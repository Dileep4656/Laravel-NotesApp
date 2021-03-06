<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

// this is a feeder for notes

class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Note Title '.$this->faker->unique()->randomDigit,
            'description' => Str::random(100)
        ];
    }
}
