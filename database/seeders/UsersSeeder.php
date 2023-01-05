<?php

namespace Database\Seeders;

use App\Models\User;
use File;
use Illuminate\Database\Seeder;
use Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/users.json');
        $users = json_decode($json);

        foreach ($users as $key => $value) {
            User::factory()->create([
                'firstname' => $value->firstname,
                'lastname' => $value->lastname,
                'fullname' => $value->firstname . ' ' . $value->lastname,
                'slug' => Str::slug($value->firstname . '-' . $value->lastname),
                'email' => $value->email,
                'email_verified_at' => now(),
                'is_admin' => $value->is_admin,
                'password' => password_hash('change_this', PASSWORD_DEFAULT),
                'remember_token' => \Illuminate\Support\Str::random(10),
                'picture' => $value->picture,
                'pictures' => $value->pictures,
                'srcset' => $value->srcset,
                'bio' => $value->bio,
                'gender' => $value->gender,
                'role' => $value->role,
            ]);
        }
    }
}
