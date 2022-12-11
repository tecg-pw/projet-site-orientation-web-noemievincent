<?php

namespace Database\Seeders;

use App\Models\Documentation;
use App\Models\DocumentationTranslation;
use File;
use Illuminate\Database\Seeder;
use Str;

class DocumentationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/documentations.json");
        $documentations = json_decode($json);

        for ($i = 0; $i < (count($documentations) / 2); $i++) {
            Documentation::create();
        }

        foreach ($documentations as $key => $value) {
            DocumentationTranslation::create([
                "title" => $value->title,
                "description" => $value->description,
                "link" => $value->link,
                "locale" => $value->locale,
                "documentation_id" => $value->documentation_id,
            ]);
        }
    }
}
