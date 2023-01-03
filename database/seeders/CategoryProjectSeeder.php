<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/category_project.json');
        $relation = json_decode($json);

        foreach ($relation as $key => $value) {
            DB::table('category_project')->insert([
                'category_id' => $value->category_id,
                'project_id' => $value->project_id,
            ]);
        }
    }
}
