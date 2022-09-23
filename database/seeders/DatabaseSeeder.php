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
            'name' => 'program',
            'username' => 'program',
            'email' => 'program@gmail.com',
            'password' => bcrypt('onefamilyonegoal2013')
        ]);

        User::create([
            'name' => 'HMTI',
            'username' => 'HMTI',
            'email' => 'hmti@uis.ac.id',
            'password' => bcrypt('onefamilyonegoal2013')
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
            'body' => 'Divisi Litbang adalah Devisi Penelitian dan Pengembangan. Dimana Tugas dan perananya adalah fokus pada pengembangan Softskill dan Hardskill di bidang teknik informatika baik dalam Internal mahasiswa Prodi Teknik Informatika. '
        ]);

        Divisi::create([
            'name' => 'Program',
            'slug' => 'program',
            'body' => 'divisi program adalah divisi yang menyokong perkembangan infrastruktur organisasi dengan memanfaatkan teknologi digital agar mempermudah dalam mengelola rancangan kegiatan'
        ]);

        Divisi::create([
            'name' => 'Humas',
            'slug' => 'humas',
            'body' => 'Program kerja devisi humas yaitu HMTI berbagi, HMTI bersama, Fun Day HMTI dan familly gathering HMTI, Menjalin kerjasama dengan perusahaan dan antar kampus.'
        ]);

        Divisi::create([
            'name' => 'Media',
            'slug' => 'media',
            'body' => 'Divisi yang mempunyai tujuan untuk menghimpun, mengolah dan mempublikasikan informasi mengenai dunia Teknik Informatika dan menjadi wadah bagi mahasiswa Teknik Informatika Universitas Ibnu Sina yang mempunyai minat di bidang multimedia Terutama dalam lingkup HMTI.'
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

        Category::create([
            'name' => 'Seminar',
            'slug' => 'seminar'
        ]);


        Category::create([
            'name' => 'Workshop',
            'slug' => 'workshop'
        ]);


        Post::factory(25)->create();
    }
}
