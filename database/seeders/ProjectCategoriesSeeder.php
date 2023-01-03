<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;
use App\Models\ProjectCategoryTranslation;
use File;
use Illuminate\Database\Seeder;
use Str;

class ProjectCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/project_categories.json');
        $categories = json_decode($json, true);

        foreach ($categories['references'] as $key => $value) {
            ProjectCategory::factory()->create();
        }

        foreach ($categories['translations'] as $key => $value) {
            ProjectCategoryTranslation::factory()->create([
                'name' => $value['name'],
                'slug' => Str::slug($value['name']),
                'locale' => $value['locale'],
                'category_id' => $value['category_id'],
            ]);
        }
    }
}
