<?php

namespace Database\Seeders;

use App\Models\Teacher;
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

        foreach ($teachers as $key => $value) {
            Teacher::create([
                "firstname" => $value->firstname,
                "lastname" => $value->lastname,
                "slug" => Str::slug($value->firstname . '-' . $value->lastname),
                "email" => $value->email,
                "picture" => $value->picture,
                "bio" => $value->bio,
                "role" => $value->role,
                "github_link" => $value->github_link,
                "linkedin_link" => $value->linkedin_link,
            ]);
        }
    }
}
