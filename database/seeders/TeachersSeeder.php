<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\TeacherTranslation;
use File;
use Illuminate\Database\Seeder;
use Str;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/teachers.json");
        $teachers = json_decode($json);

        for ($i = 0; $i < (count($teachers) / 2); $i++) {
            Teacher::create();
        }

        foreach ($teachers as $key => $value) {
            TeacherTranslation::create([
                "firstname" => $value->firstname,
                "lastname" => $value->lastname,
                "fullname" => $value->firstname . ' ' . $value->lastname,
                "slug" => Str::slug($value->firstname . '-' . $value->lastname),
                "email" => $value->email,
                "picture" => $value->picture,
                "bio" => $value->bio,
                "role" => $value->role,
                "github_link" => $value->github_link,
                "linkedin_link" => $value->linkedin_link,
                "locale" => $value->locale,
                "teacher_id" => $value->teacher_id,
            ]);
        }
    }
}
