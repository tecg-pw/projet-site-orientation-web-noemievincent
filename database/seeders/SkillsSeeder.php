<?php

namespace Database\Seeders;

use App\Models\Skill;
use File;
use Illuminate\Database\Seeder;
use Str;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/skills.json');
        $skills = json_decode($json);

        foreach ($skills as $key => $value) {
            Skill::factory()->create([
                'name' => $value->name,
                'slug' => Str::slug($value->name),
            ]);
        }
    }
}
