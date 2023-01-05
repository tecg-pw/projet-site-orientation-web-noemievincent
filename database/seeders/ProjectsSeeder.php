<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectTranslation;
use Carbon\Carbon;
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
        $json = File::get('database/data/projects.json');
        $projects = json_decode($json, true);

        foreach ($projects['references'] as $key => $value) {
            Project::factory()->create([
                'student_id' => $value['student_id'],
                'course_id' => $value['course_id'],
            ]);
        }

        foreach ($projects['translations'] as $key => $value) {
            ProjectTranslation::factory()->create([
                'title' => $value['title'],
                'slug' => Str::slug($value['title']),
                'picture' => $value['picture'],
                'pictures' => $value['pictures'],
                'srcset' => $value['srcset'],
                'body' => $value['body'],
                'website_link' => $value['website_link'],
                'github_link' => $value['github_link'],
                'gallery' => json_encode($value['gallery']),
                'published_at' => Carbon::parse($value['published_at'])->toDateTimeString(),
                'locale' => $value['locale'],
                'project_id' => $value['project_id'],
            ]);
        }
    }
}
