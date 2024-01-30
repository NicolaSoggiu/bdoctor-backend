<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $profiles = [
            [
                "user_id"        => 1,
                "description"       => "Lorem dcuibeiucewk lcewco hocbichkl",
                "services"    => "Ecografia, Radiografia, ECG",
                "address"    => "via milano 22",
                "photo"    => "",
                "visible"    => true,

            ],
            [
                "user_id"        => 2,
                "description"       => "Lorem 2 kfjbvei hvoeieoih oie",
                "services"    => "Pulizia Denti, Carie, Sbiancamento Denti",
                "address"    => "via roma 10",
                "photo"    => "",
                "visible"    => true,

            ],
            [
                "user_id"        => 3,
                "description"       => "Lorem 2 kfjbvei hvoeieoih oie",
                "services"    => "Pulizia Denti, Carie, Sbiancamento Denti",
                "address"    => "via roma 10",
                "photo"    => "",
                "visible"    => true,

            ]
        ];

        foreach ($profiles as $profile) {
            Profile::create($profile);
        }
    }
}
