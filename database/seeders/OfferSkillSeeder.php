<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/offer_skill.json");
        $relation = json_decode($json);

        foreach ($relation as $key => $value) {
            DB::table('offer_skill')->insert([
                'offer_id' => $value->offer_id,
                'skill_id' => $value->skill_id,
            ]);
        }
    }
}
