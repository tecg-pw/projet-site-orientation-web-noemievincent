<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Reply;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Reply>
 */
class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $questions_ids = Question::pluck('id');
        $users_ids = User::pluck('id');

        return [
            'body' => '<p>' . fake()->paragraph(2) . '</p>',
            'published_at' => Carbon::now()->toDateTimeString(),
            'question_id' => $questions_ids->random(),
            'user_id' => $users_ids->random(),
        ];
    }
}
