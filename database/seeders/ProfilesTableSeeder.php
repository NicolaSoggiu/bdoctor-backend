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
                "user_id"        => 23,
                "description"       => "",
                "services"    => "",
                "address"    => "",
                "photo"    => "",
                "visible"    => true,
                
            ],
            [
                "user_id"        => 12,
                "description"       => "",
                "services"    => "",
                "address"    => "",
                "photo"    => "",
                "visible"    => true,
                
            ],
        ];

        foreach ($profiles as $profile){
            Profile::create($profile);
        }
    }
}