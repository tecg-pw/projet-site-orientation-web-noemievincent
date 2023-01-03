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
        $json = File::get('database/data/tutorials.json');
        $tutorials = json_decode($json, true);

        foreach ($tutorials['references'] as $key => $value) {
            Tutorial::factory()->create();
        }

        foreach ($tutorials['translations'] as $key => $value) {
            TutorialTranslation::factory()->create([
                'title' => $value['title'],
                'description' => $value['description'],
                'link' => $value['link'],
                'locale' => $value['locale'],
                'tutorial_id' => $value['tutorial_id'],
            ]);
        }
    }
}
