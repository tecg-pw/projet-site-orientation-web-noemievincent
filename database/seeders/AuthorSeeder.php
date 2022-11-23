<?php

namespace Database\Seeders;

use App\Models\Author;
use File;
use Illuminate\Database\Seeder;
use Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/authors.json");
        $authors = json_decode($json);

        foreach ($authors as $key => $value) {
            Author::create([
                "name" => $value->name,
                "slug" => Str::slug($value->name),
            ]);
        }
    }
}
