<?php

namespace Database\Seeders;

use App\Models\Sponsorship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sponsorships = [
            [
                "id"        => 1,
                "name"       => "bronze",
                "price"       => 2.99,
                "duration"       => "24:00:00",
            ],
            [
                "id"        => 2,
                "name"       => "silver",
                "price"       => 5.99,
                "duration"       => "72:00:00",
            ],
            [
                "id"        => 3,
                "name"       => "gold",
                "price"       => 9.99,
                "duration"       => "144:00:00",
            ]
        ];

        foreach ($sponsorships as $sponsorship) {
            Sponsorship::create($sponsorship);
        }
    }
}
