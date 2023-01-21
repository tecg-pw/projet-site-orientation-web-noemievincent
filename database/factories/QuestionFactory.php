<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\QuestionCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends Factory<Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence();
        $categories_ids = QuestionCategory::pluck('id');
        $users_ids = User::pluck('id');

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '_' . uuid_create(),
            'body' => '<p>' . fake()->paragraph(2) . '</p>',
            'is_solved' => fake()->boolean(),
            'published_at' => Carbon::now()->toDateString(),
            'category_id' => $categories_ids->random(),
            'user_id' => $users_ids->random(),
        ];
    }
}
