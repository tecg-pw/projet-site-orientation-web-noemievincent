<?php

namespace Database\Seeders;

use App\Models\FaqCategory;
use App\Models\FaqCategoryTranslation;
use File;
use Illuminate\Database\Seeder;
use Str;

class FaqCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/faq_categories.json');
        $categories = json_decode($json, true);

        foreach ($categories['references'] as $key => $value) {
            FaqCategory::factory()->create();
        }

        foreach ($categories['translations'] as $key => $value) {
            FaqCategoryTranslation::factory()->create([
                'name' => $value['name'],
                'slug' => Str::slug($value['name']),
                'locale' => $value['locale'],
                'category_id' => $value['category_id'],
            ]);
        }
    }
}
