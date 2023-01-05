<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\ProjectTranslation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends Factory<ProjectTranslation>
 */
class ProjectTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence(3);
        $ids = Project::pluck('id');

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'picture' => '',
            'pictures' => json_encode(''),
            'body' => '<p>' . implode('</p><p>', fake()->paragraphs(12)) . '</p>',
            'website_link' => fake()->url(),
            'github_link' => fake()->url(),
            'gallery' => json_encode(''),
            'published_at' => Carbon::now()->toDateTimeString(),
            'locale' => fake()->randomElement(config('app.available_locales')),
            'project_id' => $ids->random(),
        ];
    }
}
