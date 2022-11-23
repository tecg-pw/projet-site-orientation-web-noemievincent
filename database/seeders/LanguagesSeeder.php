<?php

namespace Database\Seeders;

use App\Models\Language;
use File;
use Illuminate\Database\Seeder;
use Str;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/languages.json");
        $languages = json_decode($json);

        foreach ($languages as $key => $value) {
            Language::create([
                "name" => $value->name,
                "slug" => Str::slug($value->name),
            ]);
        }
    }
}
