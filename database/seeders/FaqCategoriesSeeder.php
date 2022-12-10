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
        $json = File::get("database/data/faq_categories.json");
        $categories = json_decode($json);

        for ($i = 0; $i < (count($categories) / 2); $i++) {
            FaqCategory::create();
        }

        foreach ($categories as $key => $value) {
            FaqCategoryTranslation::create([
                "name" => $value->name,
                "slug" => Str::slug($value->name),
                "locale" => $value->locale,
                "category_id" => $value->category_id,
            ]);
        }
    }
}
