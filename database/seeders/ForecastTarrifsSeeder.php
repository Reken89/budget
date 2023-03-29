<?php

namespace Database\Seeders;

use App\Structure\ForecastSection\Admin\Models\Forecasttarrif;
use Illuminate\Database\Seeder;

class ForecastTarrifsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Forecasttarrif::insert([
            [
                'tarrif_one' => 1,
                'tarrif_two' => 1,
                'chapter'    => 'heat',
            ],
            [
                'tarrif_one' => 1,
                'tarrif_two' => 1,
                'chapter'    => 'water',
            ],
            [
                'tarrif_one' => 1,
                'tarrif_two' => 1,
                'chapter'    => 'drainage',
            ],
            [
                'tarrif_one' => 1,
                'tarrif_two' => 1,
                'chapter'    => 'energy',
            ],
            [
                'tarrif_one' => 1,
                'tarrif_two' => 1,
                'chapter'    => 'trash',
            ],
            [
                'tarrif_one' => 1,
                'tarrif_two' => 1,
                'chapter'    => 'negative',
            ],           
        ]);
     
    }
}
