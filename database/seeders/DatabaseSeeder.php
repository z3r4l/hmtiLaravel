<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Divisi;
use App\Models\Post;
use App\Models\Struktur;
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

        Struktur::create([
            'name' => 'Alif Sahputra',
            'slug' => 'alif-sahputra',
            'jabatan' => 'Ketua HMTI 2022-2023',
            'divisi_id' => '1'
        ]);

        Divisi::create([
            'name' => 'Inti',
            'slug' => 'inti',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, unde?'
        ]);

        Divisi::create([
            'name' => 'Litbang',
            'slug' => 'litbang',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, unde?'
        ]);

        Divisi::create([
            'name' => 'Program',
            'slug' => 'program',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, unde?'
        ]);

        Divisi::create([
            'name' => 'Humas',
            'slug' => 'humas',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, unde?'
        ]);

        Divisi::create([
            'name' => 'Media',
            'slug' => 'media',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, unde?'
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
