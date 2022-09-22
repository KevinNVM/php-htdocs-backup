<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        // // User::create([
        // //     'name' => 'Kevin Darmawan',
        // //     'email' => 'personal.kevin@gmail.com',
        // //     'password' => bcrypt('12345')
        // // ]);

        // // User::create([
        // //     'name' => 'Asep Jerebu',
        // //     'email' => 'personal.asep@jerebu.com',
        // //     'password' => bcrypt('12345')
        // // ]);



        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        Post::factory(20)->create();

    }
}
