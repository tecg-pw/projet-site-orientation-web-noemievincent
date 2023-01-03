<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Project;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $students_ids = Student::pluck('id');
        $courses_ids = Course::pluck('id');

        return [
            'student_id' => $students_ids->random(),
            'course_id' => $courses_ids->random(),
        ];
    }
}
