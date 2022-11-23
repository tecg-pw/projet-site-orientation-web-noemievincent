<?php

namespace Database\Seeders;

use DB;
use File;
use Illuminate\Database\Seeder;

class LanguageTutorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/language_tutorial.json");
        $relation = json_decode($json);

        foreach ($relation as $key => $value) {
            DB::table('language_tutorial')->insert([
                'language_id' => $value->language_id,
                'tutorial_id' => $value->tutorial_id,
            ]);
        }
    }
}
