<?php

namespace Database\Factories;

use App\Models\Opportunity;
use App\Models\OpportunityTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends Factory<OpportunityTranslation>
 */
class OpportunityTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->sentence(3);
        $ids = Opportunity::pluck('id');

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => '<p>' . fake()->paragraph(2) . '</p>',
            'locale' => fake()->randomElement(config('app.available_locales')),
            'opportunity_id' => $ids->random(),
        ];
    }
}
