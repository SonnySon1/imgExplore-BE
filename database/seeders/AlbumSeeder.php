<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
