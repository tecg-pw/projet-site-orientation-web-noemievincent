<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\CourseTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends Factory<CourseTranslation>
 */
class CourseTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->word();
        $year = fake()->numberBetween(1, 3);
        $ids = Course::pluck('id');

        return [
            'name' => $name,
            'slug' => Str::slug($name . '-' . $year),
            'description' => '<p>' . implode('</p><p>', fake()->paragraphs(4)) . '</p>',
            'orientation' => fake()->randomElement(__('classes.orientation')),
            'year' => $year,
            'period' => fake()->randomElement(['Quadrimestre 1', 'Quadrimestre 2', 'Annuel']),
            'hours' => fake()->numberBetween(15, 120),
            'ects' => fake()->numberBetween(3, 14),
            'ects_link' => '',
            'github_link' => fake()->url(),
            'locale' => fake()->randomElement(config('app.available_locales')),
            'course_id' => $ids->random(),
        ];
    }
}
