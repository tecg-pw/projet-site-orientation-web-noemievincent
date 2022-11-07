<?php

namespace Database\Seeders;

use App\Models\Project;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::truncate();

        $json = File::get("database/data/projects.json");
        $projects = json_decode($json);

        foreach ($projects as $key => $value) {
            Project::create([
                "name" => $value->name,
                "slug" => $value->slug,
                "body" => $value->body,
                "author_name" => $value->author_name,
                "file_path" => $value->file_path,
                "github_link" => $value->github_link,
                "website_link" => $value->website_link,
            ]);
        }
    }
}
