<?php

namespace Database\Seeders;

use App\Models\Reply;
use Carbon\Carbon;
use File;
use Illuminate\Database\Seeder;

class RepliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/replies.json');
        $replies = json_decode($json);

        foreach ($replies as $key => $value) {
            Reply::factory()->create([
                'body' => $value->body,
                'published_at' => Carbon::parse($value->published_at)->toDatetimeString(),
                'question_id' => $value->question_id,
                'user_id' => $value->user_id,
            ]);
        }
    }
}
