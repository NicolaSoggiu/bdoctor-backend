<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $reviews = [
            [
                "profile_id"        => 1,
                "name"       => "Andrea",
                "lastname"    => "Serra",
                "email"    => "andrea@mail.com",
                "text"    => "Ciao",

            ],
            [
                "profile_id"        => 2,
                "name"       => "Lamberto",
                "lastname"    => "Neri",
                "email"    => "lamberto@gmail.com",
                "text"    => "Ciaoooo",

            ],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
