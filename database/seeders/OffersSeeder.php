<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\OfferTranslation;
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
        $json = File::get('database/data/offers.json');
        $offers = json_decode($json, true);

        foreach ($offers['references'] as $key => $value) {
            Offer::factory()->create([
                'company_id' => $value['company_id'],
            ]);
        }

        foreach ($offers['translations'] as $key => $value) {
            OfferTranslation::factory()->create([
                'title' => $value['title'],
                'slug' => Str::slug($value['title']),
                'body' => $value['body'],
                'start_date' => Carbon::parse($value['start_date'])->toDateTimeString(),
                'duration' => $value['duration'],
                'location' => $value['location'],
                'method' => $value['method'],
                'method_link' => $value['method_link'],
                'contact_name' => $value['contact_name'],
                'contact_email' => $value['contact_email'],
                'published_at' => Carbon::parse($value['published_at'])->toDateTimeString(),
                'locale' => $value['locale'],
                'offer_id' => $value['offer_id'],
            ]);
        }
    }
}
