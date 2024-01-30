<?php

namespace Database\Seeders;

use App\Models\Sponsorship;
use App\Models\User;
use App\Models\UserSponsorship;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSponsorshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $userSponsorships =
            [
                ["user_id" => 1, "sponsorship_id" => 1], // Utente 1 con sponsorizzazione bronze
                ["user_id" => 2, "sponsorship_id" => 2], // Utente 2 con sponsorizzazione silver
                ["user_id" => 3, "sponsorship_id" => 3]
            ];

        foreach ($userSponsorships as $userSponsorship) {
            UserSponsorship::create($userSponsorship);
        }
    }
}
