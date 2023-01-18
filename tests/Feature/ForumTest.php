<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('is not possible for a guest user access the page to post a question on the forum', function () {
    $response = $this->get('/' . app()->getLocale() . '/forum/create');

    $response->assertRedirect('/' . app()->getLocale() . '/login');
});

it('is not possible for a guest user see the form to post a reply to a question on the forum', function () {
    $this->seed([\Database\Seeders\QuestionCategoriesSeeder::class, \Database\Seeders\UsersSeeder::class]);
    $question = \App\Models\Question::factory()->create();

    $response = $this->get('/' . app()->getLocale() . '/forum/questions/' . $question->slug . '?post-reply');

    $response->assertSee('id="reply-form"', false);
});

it('is possible for an authenticated user to post a question on the forum', function () {
    $this->seed(\Database\Seeders\QuestionCategoriesSeeder::class);

    $title = 'Titre de la question';
    $body = fake()->paragraphs();
    $category_id = 1;

    $user = User::factory()->create();

    actingAs($user)
        ->post('/' . app()->getLocale() . '/forum/create', ['title' => $title, 'body' => $body, 'category_id' => $category_id])
        ->assertSee($title, false);
});

it('it is possible for an authenticated user to post a reply to a question on the forum', function () {
    $this->seed(\Database\Seeders\QuestionCategoriesSeeder::class);

    $user = User::factory()->create();
    $question = \App\Models\Question::factory()->create();

    $body = fake()->paragraph();

    actingAs($user)
        ->post('/' . app()->getLocale() . '/forum/questions/' . $question->slug . '/reply', ['body' => $body])
        ->assertRedirect('/' . app()->getLocale() . '/forum/questions/' . $question->slug . '#reply-1', false);
});

it('is possible for an authenticated user to edit its question on the forum', function () {
    $this->seed([\Database\Seeders\QuestionCategoriesSeeder::class]);

    $user = User::factory()->create();

    $question = \App\Models\Question::factory()->create();

    $new_title = 'test-question';
    $body = fake()->sentence(2);

    actingAs($user)
        ->post('/' . app()->getLocale() . '/forum/questions/' . $question->slug . '/edit', ['title' => $new_title, 'body' => $body, 'category_id' => 1])
        ->assertSee($new_title);

});

it('it is possible for an authenticated user to edit its reply to a question on the forum', function () {
    $this->seed(\Database\Seeders\QuestionCategoriesSeeder::class);

    $user = User::factory()->create();
    $question = \App\Models\Question::factory()->create();
    $reply = \App\Models\Reply::factory()->create();

    $new_body = fake()->paragraph();

    actingAs($user)
        ->post('/' . app()->getLocale() . '/forum/questions/' . $question->slug . '/reply/' . $reply->id . '/edit', ['body' => $new_body])
        ->assertRedirect('/' . app()->getLocale() . '/forum/questions/' . $question->slug . '#reply-1', false);
});

it('is possible for an authenticated user to delete its question on the forum', function () {
    $this->seed([\Database\Seeders\QuestionCategoriesSeeder::class]);

    $user = User::factory()->create();
    $question = \App\Models\Question::factory()->create();

    actingAs($user)
        ->post('/' . app()->getLocale() . '/forum/questions/' . $question->slug . '/delete')
        ->assertRedirect('/' . app()->getLocale() . '/forum');
});

it('it is possible for an authenticated user to edit delete reply to a question on the forum', function () {
    $this->seed(\Database\Seeders\QuestionCategoriesSeeder::class);

    $user = User::factory()->create();
    $question = \App\Models\Question::factory()->create();
    $reply = \App\Models\Reply::factory()->create();

    actingAs($user)
        ->post('/' . app()->getLocale() . '/forum/questions/' . $question->slug . '/reply/' . $reply->id . '/delete')
        ->assertRedirect('/' . app()->getLocale() . '/forum/questions/' . $question->slug, false);
});
