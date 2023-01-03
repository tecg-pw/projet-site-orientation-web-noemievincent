<?php

namespace Database\Factories;

use App\Models\Tool;
use App\Models\ToolTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ToolTranslation>
 */
class ToolTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ids = Tool::pluck('id');

        return [
            'title' => fake()->sentence(),
            'description' => '<p>' . fake()->paragraph(2) . '</p>',
            'link' => fake()->url(),
            'locale' => fake()->randomElement(config('app.available_locales')),
            'tool_id' => $ids->random(),
        ];
    }
}
