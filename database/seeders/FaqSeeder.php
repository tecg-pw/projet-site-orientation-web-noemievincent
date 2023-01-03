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
        $json = File::get('database/data/faq.json');
        $faq = json_decode($json, true);

        foreach ($faq['references'] as $key => $value) {
            Faq::factory()->create([
                'category_id' => $value['category_id'],
            ]);
        }

        foreach ($faq['translations'] as $key => $value) {
            FaqTranslation::factory()->create([
                'title' => $value['title'],
                'body' => $value['body'],
                'locale' => $value['locale'],
                'faq_id' => $value['faq_id'],
            ]);
        }
    }
}
