<?php

namespace Database\Factories;

use App\Models\Documentation;
use App\Models\DocumentationTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DocumentationTranslation>
 */
class DocumentationTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ids = Documentation::pluck('id');

        return [
            'title' => fake()->word(),
            'description' => '<p>' . fake()->paragraph(2) . '</p>',
            'link' => fake()->url(),
            'locale' => fake()->randomElement(config('app.available_locales')),
            'documentation_id' => $ids->random(),
        ];
    }
}
