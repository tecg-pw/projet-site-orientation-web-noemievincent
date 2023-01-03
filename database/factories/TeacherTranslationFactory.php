<?php

namespace Database\Factories;

use App\Models\Teacher;
use App\Models\TeacherTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends Factory<TeacherTranslation>
 */
class TeacherTranslationFactory extends Factory
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
        $ids = Teacher::pluck('id');

        return [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'fullname' => $firstname . ' ' . $lastname,
            'slug' => Str::slug($firstname . '-' . $lastname),
            'email' => fake()->email(),
            'picture' => '',
            'bio' => '<p>' . fake()->paragraph(2) . '</p>',
            'gender' => fake()->randomElement(['male', 'female']),
            'role' => fake()->randomElement(['teacher', 'student_teacher']),
            'github_link' => fake()->url(),
            'linkedin_link' => fake()->url(),
            'locale' => fake()->randomElement(config('app.available_locales')),
            'teacher_id' => $ids->random(),
        ];
    }
}
