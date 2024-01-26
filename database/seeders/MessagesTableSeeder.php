<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $messages = [
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

        foreach ($messages as $message) {
            Message::create($message);
        }
    }
}
