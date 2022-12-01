<?php

namespace Database\Seeders;

use App\Models\QuestionCategory;
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
        $json = File::get("database/data/question_categories.json");
        $categories = json_decode($json);

        foreach ($categories as $key => $value) {
            QuestionCategory::create([
                "name" => $value->name,
                "slug" => Str::slug($value->name),
            ]);
        }
    }
}