<?php

namespace Database\Seeders;

use DB;
use File;
use Illuminate\Database\Seeder;

class TutorialUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/tutorial_user.json");
        $relation = json_decode($json);

        foreach ($relation as $key => $value) {
            DB::table('tutorial_user')->insert([
                'tutorial_id' => $value->tutorial_id,
                'user_id' => $value->user_id,
            ]);
        }
    }
}
