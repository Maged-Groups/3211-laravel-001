<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            "name" => "Maged Yaseen",
            "email" => "magedyaseengroups@gmail.com",
            "password" => "password",
            "roles" => "admin",
            "phone" => "01024750245",
            "profile_photo" => "https://lh3.googleusercontent.com/ogw/AF2bZyjJlDe8S7dkN0oXZM1wrtyrmNpFhsNfNQPT9No7qWD0KQ=s32-c-mo",
        ]);

        User::factory(1000)->create();
    }
}
