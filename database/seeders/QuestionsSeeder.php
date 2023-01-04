<?php

namespace Database\Seeders;

use App\Models\Question;
use Carbon\Carbon;
use File;
use Illuminate\Database\Seeder;
use Str;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/questions.json');
        $questions = json_decode($json);

        foreach ($questions as $key => $value) {
            Question::factory()->create([
                'title' => $value->title,
                'slug' => Str::slug($value->title) . '_' . uuid_create(),
                'body' => $value->body,
                'is_solved' => $value->is_solved,
                'published_at' => Carbon::parse($value->published_at)->toDateTimeString(),
                'category_id' => $value->category_id,
                'user_id' => $value->user_id,
            ]);
        }
    }
}
