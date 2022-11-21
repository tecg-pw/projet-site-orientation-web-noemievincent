<?php

namespace Database\Seeders;

use App\Models\Opportunity;
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

        foreach ($opportunities as $key => $value) {
            Opportunity::create([
                "name" => $value->name,
                "slug" => Str::slug($value->name),
                "description" => $value->description,
            ]);
        }
    }
}
