<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\WillPosts;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'Study Club',
            'slug' => 'study-club'
        ]);

        Category::create([
            'name' => 'Family Gathering',
            'slug' => 'family-gathering'
        ]);

        Category::create([
            'name' => 'Rapat',
            'slug' => 'rapat'
        ]);


        Post::factory(25)->create();
        WillPosts::factory(20)->create();
    }
}
