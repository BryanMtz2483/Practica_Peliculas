<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelicula>
 */
class PeliculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake() -> name(),
            'genre'=> fake() -> randomElement(['Thriller','SciFI','Romance','Action','Suspense']),
            'duration' => fake() -> time(),
            'description' => fake() -> paragraph(),
            'year' => fake() -> year()

        ];
    }
}
