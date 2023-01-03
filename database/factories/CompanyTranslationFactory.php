<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\CompanyTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends Factory<CompanyTranslation>
 */
class CompanyTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->company();
        $ids = Company::pluck('id');

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'logo' => '',
            'description' => '<p>' . implode('</p><p>', fake()->paragraphs(12)) . '</p>',
            'website_link' => fake()->url(),
            'streetAddress' => fake()->streetAddress(),
            'postalCode' => fake()->postcode(),
            'addressLocality' => fake()->city(),
            'locale' => fake()->randomElement(config('app.available_locales')),
            'company_id' => $ids->random(),
        ];
    }
}
