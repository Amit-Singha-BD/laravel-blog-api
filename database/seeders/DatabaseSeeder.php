<?php

namespace Database\Seeders;

use App\Models\Post;
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
        // Create 2 users
        $users = User::factory(2)->create();

        // Create 20 posts
        Post::factory(20)->create([
            'user_id' => fn () => $users->random()->id,
        ]);
    }
}
