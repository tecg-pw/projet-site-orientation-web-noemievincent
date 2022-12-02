<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\StudentTranslation;
use Carbon\Carbon;
use File;
use Illuminate\Database\Seeder;
use Str;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/students.json");
        $students = json_decode($json);

        for ($i = 0; $i < (count($students) / 2); $i++) {
            Student::create();
        }

        foreach ($students as $key => $value) {
            StudentTranslation::create([
                "firstname" => $value->firstname,
                "lastname" => $value->lastname,
                "fullname" => $value->firstname . ' ' . $value->lastname,
                "slug" => Str::slug($value->firstname . '-' . $value->lastname),
                "email" => $value->email,
                "picture" => $value->picture,
                "bio" => $value->bio,
                "genre" => $value->genre,
                "role" => $value->role,
                "website_link" => $value->website_link,
                "github_link" => $value->github_link,
                "instagram_link" => $value->instagram_link,
                "linkedin_link" => $value->linkedin_link,
                "start_year" => Carbon::create($value->start_year),
                "end_year" => $value->end_year != null ? Carbon::create($value->end_year) : $value->end_year,
                "locale" => $value->locale,
                "student_id" => $value->student_id,
//                "opportunity_id" => $value->opportunity_id,
//                "company_id" => $value->company_id,
//                "internship_id" => $value->internship_id,
            ]);
        }
    }
}
