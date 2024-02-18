<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
        $file_location =[
                '1.jpg',
                '2.jpg',
                '3.webp',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
                '8.webp',
                '9.jpg',
                '10.jpg',
                '11.webp',
                '12.png',
                '13.jpg',
        ];

        shuffle($file_location);
        $shuffle_result = $file_location[0];

        return [
            'photo_title' => $this->faker->sentence(mt_rand(2,8)),
            'photo_description' => fake()->paragraph(),
            'file_location' => $shuffle_result,
            'album_id' => mt_rand(1,2),
            'category_id' => mt_rand(1,2),
            'user_id' => mt_rand(1,2),
            'allow_comments' => '1',
            'status_active' => '1',
            'uuid'  => Str::uuid()
        ];
    }
}
