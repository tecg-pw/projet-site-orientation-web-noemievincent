<?php

namespace Database\Seeders;

use App\Models\Opportunity;
use App\Models\OpportunityTranslation;
use File;
use Illuminate\Database\Seeder;
use Str;

class OpportunitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/opportunities.json");
        $opportunities = json_decode($json);

        for ($i = 0; $i < (count($opportunities) / 2); $i++) {
            Opportunity::create();
        }

        foreach ($opportunities as $key => $value) {
            OpportunityTranslation::create([
                "name" => $value->name,
                "slug" => Str::slug($value->name),
                "description" => $value->description,
                "locale" => $value->locale,
                "opportunity_id" => $value->opportunity_id,
            ]);
        }
    }
}
