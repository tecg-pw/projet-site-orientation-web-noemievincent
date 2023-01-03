<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use App\Models\ArticleCategoryTranslation;
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
        $json = File::get('database/data/article_categories.json');
        $categories = json_decode($json, true);

        foreach ($categories['references'] as $key => $value) {
            ArticleCategory::factory()->create();
        }

        foreach ($categories['translations'] as $key => $value) {
            ArticleCategoryTranslation::factory()->create([
                'name' => $value['name'],
                'slug' => Str::slug($value['name']),
                'locale' => $value['locale'],
                'category_id' => $value['category_id'],
            ]);
        }
    }
}
