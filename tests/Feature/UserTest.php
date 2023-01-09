<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

//test('a user has a full name built from its firstname and its lastname', function () {
//
//    $first_name = 'Nuno';
//    $last_name = 'Maduro';
//    $name = 'nunomaduro';
//    $email = 'nuno@laravel.com';
//    $password = bcrypt('change_this');
//
//    $user = \App\Models\User::create(compact(
//        'first_name', 'last_name', 'name', 'email', 'password'
//    ));
//
//    $full_name = 'Nuno Maduro';
//
//    $this->assertModelExists($user);
//    expect($user->full_name)->not()->toBeNull()
//        ->and($user->full_name)->toBe($full_name);
//});

it('is not possible for a guest user to access the dashboard', function () {
//    $this->withExceptionHandling();
    $response = $this->get('/dashboard');

//    $response->assertSee('<h1>Dashboard</h1>', false);
    $response->assertRedirectToRoute('login');
});

it('is possible for an authenticated user to access the dashboard', function () {
    $first_name = 'Nuno';
    $last_name = 'Maduro';
    $email = 'nuno@laravel.com';
    $password = bcrypt('change_this');

    $user = \App\Models\User::create(compact(
        'first_name', 'last_name', 'email', 'password'
    ));

    ActingAs($user)
        ->get('/dashboard')
        ->assertSee('<h1>Dashboard</h1>', false);

//    $response->assertSee('<h1>Dashboard</h1>', false);
});
