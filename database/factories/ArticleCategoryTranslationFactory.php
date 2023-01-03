<?php

namespace Database\Factories;

use App\Models\ArticleCategory;
use App\Models\ArticleCategoryTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ArticleCategoryTranslation>
 */
class ArticleCategoryTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ids = ArticleCategory::pluck('id');

        return [
            'name' => fake()->word(),
            'locale' => fake()->randomElement(config('app.available_locales')),
            'category_id' => $ids->random(),
        ];
    }
}
