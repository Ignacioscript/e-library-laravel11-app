<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn'=>$this->faker->isbn10(),
            'title'=>$this->faker->realText(50),
            'author_id'=>Author::factory(),
            'publication_year'=>$this->faker->year,
            'publisher'=>$this->faker->company,
            'available'=>$this->faker->boolean
        ];
    }
}
