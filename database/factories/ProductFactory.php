<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        $name = fake()->unique()->words(3, true);

        return [
            'name' => ucfirst($name),
            'slug' => Str::slug($name),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 15, 600),
            'category' => fake()->randomElement(['Generación I', 'Iniciales', 'Evoluciones Eevee', 'Legendarios']),
            'image_url' => 'https://images.unsplash.com/photo-1609372332255-611485350f25?w=600&auto=format&fit=crop&q=80',
            'stock' => fake()->numberBetween(1, 50),
            'rating' => fake()->randomFloat(2, 3.8, 5.0),
            'reviews_count' => fake()->numberBetween(5, 120),
            'is_featured' => fake()->boolean(25),
        ];
    }
}
