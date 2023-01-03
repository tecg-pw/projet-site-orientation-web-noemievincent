<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $authors_ids = Author::pluck('id');
        $categories_ids = ArticleCategory::pluck('id');

        return [
            'author_id' => $authors_ids->random(),
            'category_id' => $categories_ids->random(),
        ];
    }
}
