<?php

namespace Database\Seeders;

use App\Models\Company;
use File;
use Illuminate\Database\Seeder;
use Str;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/companies.json");
        $companies = json_decode($json);

        foreach ($companies as $key => $value) {
            Company::create([
                "name" => $value->name,
                "slug" => Str::slug($value->name),
                "logo" => $value->logo,
                "description" => $value->description,
                "website_link" => $value->website_link,
                "streetAddress" => $value->streetAddress,
                "postalCode" => $value->postalCode,
                "addressLocality" => $value->addressLocality,
            ]);
        }
    }
}
