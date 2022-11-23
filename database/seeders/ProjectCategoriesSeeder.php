<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;
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
        $json = File::get("database/data/project_categories.json");
        $categories = json_decode($json);

        foreach ($categories as $key => $value) {
            ProjectCategory::create([
                "name" => $value->name,
                "slug" => Str::slug($value->name),
            ]);
        }
    }
}
