<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        Comment::factory(50)->create();

        \App\Models\User::factory()->create([
            'name' => 'gigi',
            'email' => 'ephraim30@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // $this->call(ArcticleSeeder::class);

        // $this->call(CommentSeeder::class);

        // $this->call(CategorySeeder::class);



    }
}
