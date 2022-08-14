<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        User::create([
            'name' => 'ZeraL',
            'username' => 'Zeral',
            'email' => 'zeri.aldi@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::factory(3)->create();

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


        // Post::factory(25)->create();
    }
}
