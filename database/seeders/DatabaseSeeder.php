<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UsersTableSeeder::class,
            ProfilesTableSeeder::class,
            MessagesTableSeeder::class,
            TypologiesTableSeeder::class,
            StarsTableSeeder::class,
            ReviewsTableSeeder::class,
            SponsorshipsTableSeeder::class,
        ]);
    }
}
