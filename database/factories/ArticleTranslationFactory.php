<?php

namespace Database\Factories;

use App\Models\Article;
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
        $ids = Article::pluck('id');

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'picture' => '',
            'pictures' => json_encode(''),
            'srcset' => json_encode(''),
            'excerpt' => fake()->paragraph(),
            'body' => '<p>' . implode('</p><p>', fake()->paragraphs(12)) . '</p>',
            'published_at' => Carbon::now()->toDateString(),
            'locale' => fake()->randomElement(config('app.available_locales')),
            'article_id' => $ids->random(),
        ];
    }
}
