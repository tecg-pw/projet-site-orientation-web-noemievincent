<?php

namespace Database\Seeders;

use App\Models\QuestionCategory;
use App\Models\QuestionCategoryTranslation;
use File;
use Illuminate\Database\Seeder;
use Str;

class QuestionCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/question_categories.json');
        $categories = json_decode($json, true);

        foreach ($categories['references'] as $key => $value) {
            QuestionCategory::factory()->create();
        }

        foreach ($categories['translations'] as $key => $value) {
            QuestionCategoryTranslation::factory()->create([
                'name' => $value['name'],
                'slug' => Str::slug($value['name']),
                'locale' => $value['locale'],
                'category_id' => $value['category_id'],
            ]);
        }
    }
}
