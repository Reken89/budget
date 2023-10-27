<?php

namespace Database\Seeders;

use App\Structure\CommunalSection\User\Models\Tarrifs;
use Illuminate\Database\Seeder;

class TarrifsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($mounth = 1; $mounth < 13; $mounth++){
            Tarrifs::create([
                'year'         => 2024,
                'mounth'       => $mounth,
                'heat-one'     => 1.000,
                'heat-two'     => 1.000,
                'drainage-one' => 1.000,
                'drainage-two' => 1.000,
                'negative-one' => 1.000,
                'negative-two' => 1.000,
                'water-one'    => 1.000,
                'water-two'    => 1.000,
                'power-one'    => 1.000,
                'power-two'    => 1.000,
                'trash-one'    => 1.000,
                'trash-two'    => 1.000,
                'disposal-one' => 1.000,
                'disposal-two' => 1.000,
            ]);
        }              
    }
}


