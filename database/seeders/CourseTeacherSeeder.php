<?php

namespace Database\Seeders;

use DB;
use File;
use Illuminate\Database\Seeder;

class CourseTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/course_teacher.json");
        $relation = json_decode($json);

        foreach ($relation as $key => $value) {
            DB::table('course_teacher')->insert([
                'course_id' => $value->course_id,
                'teacher_id' => $value->teacher_id,
            ]);
        }
    }
}
