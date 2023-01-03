<?php

namespace Database\Factories;

use App\Models\Faq;
use App\Models\FaqTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FaqTranslation>
 */
class FaqTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ids = Faq::pluck('id');

        return [
            'title' => fake()->sentence(),
            'body' => '<p>' . fake()->paragraph(2) . '</p>',
            'locale' => fake()->randomElement(config('app.available_locales')),
            'faq_id' => $ids->random(),
        ];
    }
}
