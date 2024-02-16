<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Album;
use App\Models\User;
use App\Models\Photo;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username'  => 'soni',
            'password'  => bcrypt(123),
            'email'  => 'soni@gmail.com',
            'name'  => 'Sonny Yheo',
            'picture'  => 'picture1.jpg',
            'status_active'  => 1,
            'role'  => 'admin',
            'uuid'  => Str::uuid(),
        ]); 

        User::create([
            'username'  => 'nico',
            'password'  => bcrypt(123),
            'email'  => 'nico@gmail.com',
            'name'  => 'nico',
            'picture'  => 'picture1.jpg',
            'status_active'  => 1,
            'role'  => 'user',
            'uuid'  => Str::uuid(),
        ]); 

        Category::create([
            'name'  => 'Modern Art',
            'description' => 'kumpulan modern art'
        ]); 
        Category::create([
            'name'  => 'Traditional Art',
            'description' => 'kumpulan Traditional art'
        ]); 

        Album::create([
            'album_name' => 'My Art',
            'description' => 'Hanya art tradisional',
            'user_id' => 1,
            'uuid' => Str::uuid()
        ]);

        Album::create([
            'album_name' => 'Cool Art',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'user_id' => 2,
            'uuid' => Str::uuid()
        ]);

        Photo::create([
            'photo_title' => 'Arabic paintings with modern themes',
            'photo_description' => 'lukisan memukau dengan gaya modern',
            'file_location' => '240210094525.jpg',
            'album_id' => 1,
            'category_id' => 1,
            'user_id' => 2,
            'allow_comments' => '1',
            'uuid'  => Str::uuid(),
        ]); 

        Photo::create([
            'photo_title' => 'Abstract paintings with stunning human objects',
            'photo_description' => 'abstract painting with a modern theme ',
            'file_location' => '240210095435.jpg',
            'album_id' => 1,
            'category_id' => 1,
            'user_id' => 1,
            'allow_comments' => '1',
            'uuid'  => Str::uuid(),

        ]); 

        



    }
}
