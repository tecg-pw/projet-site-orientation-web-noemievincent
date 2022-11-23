<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use File;
use Illuminate\Database\Seeder;
use Str;

class ArticleCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/article_categories.json");
        $categories = json_decode($json);

        foreach ($categories as $key => $value) {
            ArticleCategory::create([
                "name" => $value->name,
                "slug" => Str::slug($value->name),
            ]);
        }
    }
}
