<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\FaqTranslation;
use File;
use Illuminate\Database\Seeder;
use Str;

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

        for ($i = 0; $i < (count($faq) / 2); $i++) {
            Faq::create();
        }

        foreach ($faq as $key => $value) {
            FaqTranslation::create([
                "title" => $value->title,
                "slug" => Str::slug($value->title),
                "body" => $value->body,
                "category" => $value->category,
                "locale" => $value->locale,
                "faq_id" => $value->faq_id,
            ]);
        }
    }
}
