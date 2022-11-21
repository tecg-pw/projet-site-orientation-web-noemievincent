<?php

namespace Database\Seeders;

use App\Models\Project;
use File;
use Illuminate\Database\Seeder;
use Str;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/projects.json");
        $projects = json_decode($json);

        foreach ($projects as $key => $value) {
            Project::create([
                "title" => $value->title,
                "slug" => Str::slug($value->title),
                "picture" => $value->picture,
                "body" => $value->body,
                "date" => $value->date,
                "website_link" => $value->website_link,
                "github_link" => $value->github_link,
                "student_id" => $value->student_id,
                "course_id" => $value->course_id,
            ]);
        }
    }
}
