<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

uses(RefreshDatabase::class);

test('that there is a success message when a guest user register', function () {

    $firstname = fake()->firstName;
    $lastname = fake()->lastName;

    $response = $this->post('/' . app()->getLocale() . '/register', [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => fake()->email(),
        'password' => password_hash('change_this', PASSWORD_DEFAULT),
    ]);

    $response->assertRedirect('/' . app()->getLocale())->assertSessionHas('success');
});

test('that there is a success message when a user log in', function () {
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

    $response = $this->post('/' . app()->getLocale() . '/login', ['email' => $email, 'password' => $password]);
    $response->assertRedirect('/' . app()->getLocale())->assertSessionHas('success')->assertSessionHas('success');
});

test('that there is a success message when an authenticated user edit its informations', function () {
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
        ->assertRedirect('/' . app()->getLocale() . '/users/' . $new_slug)->assertSessionHas('success');
});

test('that there is a success message when an authenticated user edit its password', function () {
    $firstname = 'Toto';
    $lastname = 'Titi';
    $email = 'titi@gmail.com';

    $old_password = 'change_this';
    $new_password = 'azerty123';

    $user = User::create([
        'firstname' => $firstname,
        'lastname' => $lastname,
        'fullname' => $firstname . ' ' . $lastname,
        'slug' => Str::slug($firstname . '-' . $lastname),
        'email' => $email,
        'email_verified_at' => now(),
        'is_admin' => false,
        'password' => password_hash($old_password, PASSWORD_DEFAULT),
        'remember_token' => Str::random(10),
        'bio' => '<p>' . fake()->paragraph(2) . '</p>',
        'gender' => fake()->randomElement(['', 'male', 'female']),
        'role' => 'user',
    ]);

    actingAs($user)
        ->post('/' . app()->getLocale() . '/users/' . $user->slug . '/update-password', [
            'old-password' => $old_password,
            'new-password' => $new_password,
        ])
        ->assertRedirect('/' . app()->getLocale() . '/users/' . $user->slug)->assertSessionHas('success');
});
