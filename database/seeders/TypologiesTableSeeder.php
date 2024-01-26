<?php

namespace Database\Seeders;

use App\Models\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $typologies = [
            [
                "name"       => "Chirurgo",
            ],
            [
                "name"       => "Dentista",
            ]
        ];

        foreach ($typologies as $typology) {
            Typology::create($typology);
        }
    }
}
