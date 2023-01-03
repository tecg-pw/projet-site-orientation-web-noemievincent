<?php

namespace Database\Factories;

use App\Models\ArticleTranslation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends Factory<ArticleTranslation>
 */
class ArticleTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence();
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'picture' => '',
            'excerpt' => fake()->paragraph(),
            'body' => '<p>' . implode('</p><p>', fake()->paragraphs(12)) . '</p>',
            'published_at' => Carbon::now()->toDateTimeString(),
            'locale' => fake()->randomElement(['fr', 'en']),
            'article_id' => 1,
        ];
    }
}