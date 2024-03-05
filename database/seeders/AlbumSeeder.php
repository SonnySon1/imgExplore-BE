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
            'description' => 'A collection of my art photos',
            'user_id' => 1,
            'uuid' => Str::uuid()
        ]);

        Album::create([
            'album_name' => 'Cool Art',
            'description' => 'All interesting art',
            'user_id' => 2,
            'uuid' => Str::uuid()
        ]);
    }
}
