<?php

namespace Database\Factories;

use App\Models\FaqCategory;
use App\Models\FaqCategoryTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends Factory<FaqCategoryTranslation>
 */
class FaqCategoryTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->word();
        $ids = FaqCategory::pluck('id');

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'locale' => fake()->randomElement(config('app.available_locales')),
            'category_id' => $ids->random(),
        ];
    }
}
