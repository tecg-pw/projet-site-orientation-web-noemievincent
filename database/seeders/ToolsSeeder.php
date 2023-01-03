<?php

namespace Database\Seeders;

use App\Models\Tool;
use App\Models\ToolTranslation;
use File;
use Illuminate\Database\Seeder;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/tools.json');
        $tools = json_decode($json, true);

        foreach ($tools['references'] as $key => $value) {
            Tool::factory()->create();
        }

        foreach ($tools['translations'] as $key => $value) {
            ToolTranslation::factory()->create([
                'title' => $value['title'],
                'description' => $value['description'],
                'link' => $value['link'],
                'locale' => $value['locale'],
                'tool_id' => $value['tool_id'],
            ]);
        }
    }
}
