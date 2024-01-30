<?php

namespace Database\Seeders;

use App\Models\ProfileTypology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilesTypologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $profileTypologies =
            [
                ["profile_id" => 1, "typology_id" => 1],
                ["profile_id" => 2, "typology_id" => 2],
                ["profile_id" => 3, "typology_id" => 3]
            ];

        foreach ($profileTypologies as $profileTypologie) {
            ProfileTypology::create($profileTypologie);
        }
    }
}
