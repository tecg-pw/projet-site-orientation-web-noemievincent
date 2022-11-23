<?php

namespace Database\Seeders;

use App\Models\Tutorial;
use File;
use Illuminate\Database\Seeder;
use Str;

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

        foreach ($tutorials as $key => $value) {
            Tutorial::create([
                "title" => $value->title,
                "slug" => Str::slug($value->title),
                "description" => $value->description,
                "link" => $value->link,
            ]);
        }
    }
}
