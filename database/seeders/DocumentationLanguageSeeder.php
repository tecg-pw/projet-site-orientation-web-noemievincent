<?php

namespace Database\Seeders;

use DB;
use File;
use Illuminate\Database\Seeder;

class DocumentationLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/documentation_language.json');
        $relation = json_decode($json);

        foreach ($relation as $key => $value) {
            DB::table('documentation_language')->insert([
                'language_id' => $value->language_id,
                'documentation_id' => $value->documentation_id,
            ]);
        }
    }
}
