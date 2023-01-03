<?php

namespace Database\Factories;

use App\Models\ProjectCategory;
use App\Models\ProjectCategoryTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends Factory<ProjectCategoryTranslation>
 */
class ProjectCategoryTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->word();
        $ids = ProjectCategory::pluck('id');

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'locale' => fake()->randomElement(config('app.available_locales')),
            'category_id' => $ids->random(),
        ];
    }
}
