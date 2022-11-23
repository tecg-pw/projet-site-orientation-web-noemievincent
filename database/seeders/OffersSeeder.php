<?php

namespace Database\Seeders;

use App\Models\Offer;
use Carbon\Carbon;
use File;
use Illuminate\Database\Seeder;
use Str;

class OffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/offers.json");
        $offers = json_decode($json);

        foreach ($offers as $key => $value) {
            Offer::create([
                "title" => $value->title,
                "slug" => Str::slug($value->title),
                "body" => $value->body,
                "start_date" => Carbon::parse($value->start_date)->toDateTimeString(),
                "duration" => $value->duration,
                "location" => $value->location,
                "method" => $value->method,
                "method_link" => $value->method_link,
                "contact_name" => $value->contact_name,
                "contact_email" => $value->contact_email,
                "published_at" => Carbon::parse($value->published_at)->toDateTimeString(),
                "company_id" => $value->company_id,
            ]);
        }
    }
}
