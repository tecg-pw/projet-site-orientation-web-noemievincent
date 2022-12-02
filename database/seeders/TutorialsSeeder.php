<?php

namespace Database\Seeders;

use App\Models\Tutorial;
use App\Models\TutorialTranslation;
use File;
use Illuminate\Database\Seeder;

class TutorialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/tutorials.json");
        $tutorials = json_decode($json);

        for ($i = 0; $i < (count($tutorials) / 2); $i++) {
            Tutorial::create();
        }

        foreach ($tutorials as $key => $value) {
            TutorialTranslation::create([
                "title" => $value->title,
                "description" => $value->description,
                "link" => $value->link,
                "locale" => $value->locale,
                "tutorial_id" => $value->tutorial_id,
            ]);
        }
    }
}
