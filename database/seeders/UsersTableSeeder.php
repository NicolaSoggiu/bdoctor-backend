<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                "name"        => "Nicola",
                "email"       => "Nicola@gmail.com",
                "password"    => Hash::make('Nicola'),
                
            ],
            [
                "name"        => "Andrea",
                "email"       => "Andrea@gmail.com",
                "password"    => Hash::make('Andrea'),
                
            ],
            [
                "name"        => "Lamberto",
                "email"       => "Lamberto@gmail.com",
                "password"    => Hash::make('Lamberto'),
              
            ],
            [
                "name"        => "Matteo",
                "email"       => "Matteo@gmail.com",
                "password"    => Hash::make('Matteo'),
                
            ],
            [
                "name"        => "Luca",
                "email"       => "Luca@gmail.com",
                "password"    => Hash::make('Luca'),
              
            ],
        ];

        foreach ($users as $user){
            User::create($user);
        }
    }
}