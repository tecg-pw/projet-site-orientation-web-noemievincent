<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $firstname = fake()->firstName;
        $lastname = fake()->lastName;

        return [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'fullname' => $firstname . ' ' . $lastname,
            'slug' => Str::slug($firstname . '-' . $lastname),
            'email' => fake()->email(),
            'email_verified_at' => now(),
            'is_admin' => false,
            'password' => password_hash('change_this', PASSWORD_DEFAULT),
            'remember_token' => Str::random(10),
            'picture' => '',
            'pictures' => json_encode(''),
            'bio' => '<p>' . fake()->paragraph(2) . '</p>',
            'gender' => fake()->randomElement(['', 'male', 'female']),
            'role' => 'user',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
