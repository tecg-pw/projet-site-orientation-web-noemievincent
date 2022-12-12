<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\FaqTranslation;
use File;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/faq.json");
        $faq = json_decode($json);

        foreach ($faq as $key => $value) {
            if ($key % 2 == 0) {
                Faq::create([
                    "category_id" => $value->category_id,
                ]);
            }
        }

        foreach ($faq as $key => $value) {
            FaqTranslation::create([
                "title" => $value->title,
                "body" => $value->body,
                "locale" => $value->locale,
                "faq_id" => $value->faq_id,
            ]);
        }
    }
}
