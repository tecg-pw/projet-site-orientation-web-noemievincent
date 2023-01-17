<?php

namespace Database\Seeders;

use App\Models\PendingOffer;
use Carbon\Carbon;
use File;
use Illuminate\Database\Seeder;

class PendingOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/pending_offers.json');
        $authors = json_decode($json);

        foreach ($authors as $key => $value) {
            PendingOffer::factory()->create([
                'company_logo' => $value->company_logo,
                'company_name' => $value->company_name,
                'website' => $value->website,
                'contact_name' => $value->contact_name,
                'contact_email' => $value->contact_email,
                'title' => $value->title,
                'description' => $value->description,
                'skills' => json_encode($value->skills),
                'add_skill' => json_encode($value->add_skill),
                'start_date' => Carbon::parse($value->start_date)->toDateTimeString(),
                'duration' => $value->duration,
                'location' => $value->location,
                'reception_mode' => $value->reception_mode,
                'applications_link' => $value->applications_link,
            ]);
        }
    }
}
