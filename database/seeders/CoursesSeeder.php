<?php

namespace Database\Seeders;

use App\Models\Course;
use File;
use Illuminate\Database\Seeder;
use Str;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/courses.json");
        $teachers = json_decode($json);

        foreach ($teachers as $key => $value) {
            Course::create([
                "name" => $value->name,
                "slug" => Str::slug($value->name . '-' . $value->year),
                "description" => $value->description,
                "orientation" => $value->orientation,
                "year" => $value->year,
                "period" => $value->period,
                "hours" => $value->hours,
                "ects" => $value->ects,
                "ects_link" => $value->ects_link,
                "github_link" => $value->github_link,
            ]);
        }
    }
}
