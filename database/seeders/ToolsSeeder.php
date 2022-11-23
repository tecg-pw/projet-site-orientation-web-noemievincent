<?php

namespace Database\Seeders;

use App\Models\Tool;
use File;
use Illuminate\Database\Seeder;
use Str;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/tools.json");
        $tools = json_decode($json);

        foreach ($tools as $key => $value) {
            Tool::create([
                "title" => $value->title,
                "slug" => Str::slug($value->title),
                "description" => $value->description,
                "link" => $value->link,
            ]);
        }
    }
}
