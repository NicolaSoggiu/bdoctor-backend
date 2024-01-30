<?php

namespace Database\Seeders;

use App\Models\ProfileStar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilesStarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $profileStars =
            [
                ["profile_id" => 1, "star_id" => 1],
                ["profile_id" => 2, "star_id" => 2],
                ["profile_id" => 3, "star_id" => 3]
            ];

        foreach ($profileStars as $profileStar) {
            ProfileStar::create($profileStar);
        }
    }
}
