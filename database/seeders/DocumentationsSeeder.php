<?php

namespace Database\Seeders;

use App\Models\Documentation;
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

        foreach ($documentations as $key => $value) {
            Documentation::create([
                "title" => $value->title,
                "slug" => Str::slug($value->title),
                "description" => $value->description,
                "link" => $value->link,
            ]);
        }
    }
}
