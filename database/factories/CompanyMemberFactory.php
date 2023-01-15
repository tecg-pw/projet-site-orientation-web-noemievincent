<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\CompanyMember;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends Factory<CompanyMember>
 */
class CompanyMemberFactory extends Factory
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
        $ids = Company::pluck('id');

        return [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'fullname' => $firstname . ' ' . $lastname,
            'slug' => Str::slug($firstname . '-' . $lastname),
            'picture' => '',
            'pictures' => json_encode(''),
            'srcset' => json_encode(''),
            'github_link' => fake()->url(),
            'linkedin_link' => fake()->url(),
            'company_id' => $ids->random(),
        ];
    }
}
