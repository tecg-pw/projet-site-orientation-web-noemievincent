<?php

namespace Database\Seeders;

use App\Models\Tool;
use App\Models\ToolTranslation;
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

        for ($i = 0; $i < (count($tools) / 2); $i++) {
            Tool::create();
        }

        foreach ($tools as $key => $value) {
            ToolTranslation::create([
                "title" => $value->title,
                "slug" => Str::slug($value->title),
                "description" => $value->description,
                "link" => $value->link,
                "locale" => $value->locale,
                "tool_id" => $value->tool_id,
            ]);
        }
    }
}
