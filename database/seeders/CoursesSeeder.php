<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseTranslation;
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
        $courses = json_decode($json);

        for ($i = 0; $i < (count($courses) / 2); $i++) {
            Course::create();
        }

        foreach ($courses as $key => $value) {
            CourseTranslation::create([
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
                "locale" => $value->locale,
                "course_id" => $value->course_id,
            ]);
        }
    }
}
