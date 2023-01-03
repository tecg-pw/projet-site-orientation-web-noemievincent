<?php

namespace Database\Factories;

use App\Models\Tutorial;
use App\Models\TutorialTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TutorialTranslation>
 */
class TutorialTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ids = Tutorial::pluck('id');

        return [
            'title' => fake()->sentence(),
            'description' => '<p>' . fake()->paragraph(2) . '</p>',
            'link' => fake()->url(),
            'locale' => fake()->randomElement(config('app.available_locales')),
            'tutorial_id' => $ids->random(),
        ];
    }
}
