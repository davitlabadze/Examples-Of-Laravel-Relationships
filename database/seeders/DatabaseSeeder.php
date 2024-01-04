<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        \App\Models\Post::create([
            'user_id' => '1',
            'title' => 'First Post',
            'body' => 'This is the first post',
        ]);

        \App\Models\Post::create([
            'user_id' => '1',
            'title' => 'Second Post',
            'body' => 'This is the second post',
        ]);

        \App\Models\Post::create([
            'user_id' => '1',
            'title' => 'Third Post',
            'body' => 'This is the third post',
        ]);

        \App\Models\Post::create([
            // 'user_id' => '1',
            'title' => 'Forth Post',
            'body' => 'This is the Forth post',
        ]);

    }
}
