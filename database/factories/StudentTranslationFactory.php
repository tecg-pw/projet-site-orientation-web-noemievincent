<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\StudentTranslation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends Factory<StudentTranslation>
 */
class StudentTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $firstname = fake()->firstName;
        $lastname = fake()->lastName;
        $start_year = Carbon::create(fake()->dateTimeBetween('-10 years', 'now'));
        $ids = Student::pluck('id');

        return [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'fullname' => $firstname . ' ' . $lastname,
            'slug' => Str::slug($firstname . '-' . $lastname),
            'email' => fake()->email(),
            'picture' => '',
            'pictures' => json_encode(''),
            'srcset' => json_encode(''),
            'bio' => '<p>' . fake()->paragraph(2) . '</p>',
            'gender' => fake()->randomElement(['male', 'female']),
            'role' => fake()->randomElement(['student', 'alumni', 'student_teacher']),
            'website_link' => fake()->url(),
            'github_link' => fake()->url(),
            'instagram_link' => fake()->url(),
            'linkedin_link' => fake()->url(),
            'start_year' => $start_year,
            'end_year' => $start_year->addYears(3),
            'locale' => fake()->randomElement(config('app.available_locales')),
            'student_id' => $ids->random(),
        ];
    }
}
