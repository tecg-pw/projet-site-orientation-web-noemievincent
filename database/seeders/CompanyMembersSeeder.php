<?php

namespace Database\Seeders;

use App\Models\CompanyMember;
use File;
use Illuminate\Database\Seeder;
use Str;

class CompanyMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/company_members.json');
        $members = json_decode($json);

        foreach ($members as $key => $value) {
            CompanyMember::factory()->create([
                'firstname' => $value->firstname,
                'lastname' => $value->lastname,
                'fullname' => $value->firstname . ' ' . $value->lastname,
                'slug' => Str::slug($value->firstname . '-' . $value->lastname),
                'picture' => $value->picture,
                'pictures' => $value->pictures,
                'srcset' => $value->srcset,
                'github_link' => $value->github_link,
                'linkedin_link' => $value->linkedin_link,
                'company_id' => $value->company_id,
            ]);
        }
    }
}
