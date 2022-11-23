<?php

namespace Database\Seeders;

use App\Models\Faq;
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

        foreach ($faq as $key => $value) {
            Faq::create([
                "title" => $value->title,
                "slug" => Str::slug($value->title),
                "body" => $value->body,
                "category" => $value->category,
            ]);
        }
    }
}
