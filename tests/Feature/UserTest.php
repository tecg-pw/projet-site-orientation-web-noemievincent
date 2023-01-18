<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

uses(RefreshDatabase::class);

it('is not possible for a guest user to access the nova dashboard', function () {
//    $this->withExceptionHandling();
    $response = $this->get('/admin');

    $response->assertRedirect(app()->getLocale() . '/login');
});

it('is not possible for an authenticated user who is not admin to access the nova dashboard', function () {
    $user = User::factory()->create();

    actingAs($user)
        ->get('/admin')
        ->assertRedirect('/', false);
});

it('is possible for an authenticated user who is admin to access the nova dashboard', function () {
    $user = User::factory()->create(['is_admin' => true]);

    ActingAs($user)
        ->get('/admin')
        ->assertRedirect('/admin/nova', false);
});

it('is possible for a guest to create an account', function () {

    $firstname = fake()->firstName;
    $lastname = fake()->lastName;

    $response = $this->post('/' . app()->getLocale() . '/register', [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => fake()->email(),
        'password' => password_hash('change_this', PASSWORD_DEFAULT),
    ]);

    $response->assertRedirect('/' . app()->getLocale());
});

it('is possible for a user to log in ', function () {
    $firstname = 'Toto';
    $lastname = 'Titi';

    $email = 'titi@gmail.com';
    $password = 'azerty123';

    $user = User::create([
        'firstname' => $firstname,
        'lastname' => $lastname,
        'fullname' => $firstname . ' ' . $lastname,
        'slug' => Str::slug($firstname . '-' . $lastname),
        'email' => $email,
        'email_verified_at' => now(),
        'is_admin' => false,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'remember_token' => Str::random(10),
        'bio' => '<p>' . fake()->paragraph(2) . '</p>',
        'gender' => fake()->randomElement(['', 'male', 'female']),
        'role' => 'user',
    ]);

    $response = $this->post('/'.app()->getLocale().'/login',['email'=>$email, 'password'=>$password]);
    $response->assertRedirect('/'.app()->getLocale());
});

it('is not possible for an authenticated user to access the edit page of another user’s profile', function () {
    $user = User::factory()->create();
    $other_user = User::factory()->create();

    actingAs($user)
        ->get('/' . app()->getLocale() . '/users/' . $other_user->slug . '/edit')
        ->assertRedirect('/' . app()->getLocale() . '/users/' . $other_user->slug, false);
});

it('is possible for an authenticated user to access the edit page of its profile', function () {
    $user = User::factory()->create();

    $new_firstname = 'Noémie';
    $new_lastname = 'Vincent';

    $new_slug = Str::slug($new_firstname . '-' . $new_lastname);

    actingAs($user)
        ->post('/' . app()->getLocale() . '/users/' . $user->slug . '/update-infos', [
            'firstname' => $new_firstname,
            'lastname' => $new_lastname,
            'email' => $user->email,
        ])
        ->assertRedirect('/' . app()->getLocale() . '/users/' . $new_slug);
});
