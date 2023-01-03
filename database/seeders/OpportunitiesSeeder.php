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
        $json = File::get('database/data/opportunities.json');
        $opportunities = json_decode($json, true);

        foreach ($opportunities['references'] as $key => $value) {
            Opportunity::factory()->create();
        }

        foreach ($opportunities['translations'] as $key => $value) {
            OpportunityTranslation::factory()->create([
                'name' => $value['name'],
                'slug' => Str::slug($value['name']),
                'description' => $value['description'],
                'locale' => $value['locale'],
                'opportunity_id' => $value['opportunity_id'],
            ]);
        }
    }
}
