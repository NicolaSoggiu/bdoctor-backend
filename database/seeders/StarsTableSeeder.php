<?php

namespace Database\Seeders;

use App\Models\Star;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $stars = [
            [
                "vote"       => "4",
            ],
            [
                "vote"       => "3",
            ]
        ];

        foreach ($stars as $star) {
            Star::create($star);
        }
    }
}
