<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articles>
 */
class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(50),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(14))->map(fn($item) => "<p>{$item}</p>")->implode(''),
            'block_quote' => $this->faker->paragraph(),
            'slug' => $this->faker->slug(),
        ];
    }
}
