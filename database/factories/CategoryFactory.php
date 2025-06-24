<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        $categoryName = $this->faker->randomElement([
            'Technology',
            'Arts & Culture',
            'Business',
            'Communication',
            'Engineering'
        ]);

        return [
            'category_name' => $categoryName,
            'slug' => Str::slug($categoryName),
            'description' => $this->faker->sentence(),
        ];
    }
}
