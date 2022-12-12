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
        $json = File::get("database/data/users.json");
        $users = json_decode($json);

        foreach ($users as $key => $value) {
            User::create([
                "firstname" => $value->firstname,
                "lastname" => $value->lastname,
                "fullname" => $value->firstname . ' ' . $value->lastname,
                "slug" => Str::slug($value->firstname . '-' . $value->lastname),
                "email" => $value->email,
                'email_verified_at' => now(),
                "is_admin" => $value->is_admin,
                'password' => bcrypt('change_this'),
                'remember_token' => \Illuminate\Support\Str::random(10),
                "picture" => $value->picture,
                "bio" => $value->bio,
                "genre" => $value->genre,
                "role" => $value->role,
            ]);
        }
    }
}
