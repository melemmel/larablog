<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::truncate();
        // Category::truncate();
        // Post::truncate();
        $user =  User::factory()->create([
            'name' => 'Rommel Ramos'
        ]);

        Post::factory()->create([
            'user_id' => $user->id
        ]);
        // $user = User::factory()->create();

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family',
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => 'Lorem ipsum hello world',
        //     'body' => 'Lorem ipsum hello world'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-second-post',
        //     'excerpt' => 'Lorem ipsum hello world',
        //     'body' => 'Lorem ipsum hello world'
        // ]);

        DB::table('users')->insert([
            'name' => 'Rommel Ramos',
            'username' => 'Rommel',
            'email' => 'ramosrommel2001@gmail.com',
            'password' => Hash::make('!password')
        ]);
    }
}
