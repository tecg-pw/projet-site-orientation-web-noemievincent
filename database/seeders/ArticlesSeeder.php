<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleTranslation;
use Carbon\Carbon;
use File;
use Illuminate\Database\Seeder;
use Str;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/articles.json");
        $articles = json_decode($json);

        for ($i = 0; $i < (count($articles) / 2); $i++) {
            Article::create();
        }

        foreach ($articles as $key => $value) {
            ArticleTranslation::create([
                "title" => $value->title,
                "slug" => Str::slug($value->title),
                "picture" => $value->picture,
                "excerpt" => $value->excerpt,
                "body" => $value->body,
                "published_at" => Carbon::parse($value->published_at)->toDateTimeString(),
                "locale" => $value->locale,
                "article_id" => $value->article_id,
                "category_id" => $value->category_id,
                "author_id" => $value->author_id,
            ]);
        }
    }
}
