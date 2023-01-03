<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Opportunity;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $companies_ids = Company::pluck('id');
        $internships_ids = Company::pluck('id');
        $opportunities_ids = Opportunity::pluck('id');

        return [
            'company_id' => $companies_ids->random(),
            'internship_id' => $internships_ids->random(),
            'opportunity_id' => $opportunities_ids->random(),
        ];
    }
}
