<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\question;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

       $user = User::factory()->create([
            'name' => 'Ahmad',

        ]);

        question::factory(30)->create([
            'user_id' => $user->id
        ]);
    }
}
