<?php

namespace Database\Seeders;

use App\Models\Documentation;
use App\Models\DocumentationTranslation;
use File;
use Illuminate\Database\Seeder;

class DocumentationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/documentations.json');
        $documentations = json_decode($json, true);

        foreach ($documentations['references'] as $key => $value) {
            Documentation::factory()->create();
        }

        foreach ($documentations['translations'] as $key => $value) {
            DocumentationTranslation::factory()->create([
                'title' => $value['title'],
                'description' => $value['description'],
                'link' => $value['link'],
                'locale' => $value['locale'],
                'documentation_id' => $value['documentation_id'],
            ]);
        }
    }
}
