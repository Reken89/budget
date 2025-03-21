<?php

namespace Database\Seeders;

use App\Structure\Forecast25Section\Admin\Models\Tarrif;
use Illuminate\Database\Seeder;

class Tarrifs25Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarrif::insert([
            [
                'year'       => 2025,
                'tarrif_one' => 3994.970,
                'tarrif_two' => 4470.370,
                'title'      => 'heat',
                'date'       => date('Y-m-d'),
            ],
            [
                'year'       => 2025,
                'tarrif_one' => 37.150,
                'tarrif_two' => 41.570,
                'title'      => 'water',
                'date'       => date('Y-m-d'),
            ],
            [
                'year'       => 2025,
                'tarrif_one' => 46.360,
                'tarrif_two' => 51.880,
                'title'      => 'drainage',
                'date'       => date('Y-m-d'),
            ],
            [
                'year'       => 2025,
                'tarrif_one' => 10.400,
                'tarrif_two' => 11.710,
                'title'      => 'energy',
                'date'       => date('Y-m-d'),
            ],
            [
                'year'       => 2025,
                'tarrif_one' => 539.550,
                'tarrif_two' => 603.760,
                'title'      => 'trash',
                'date'       => date('Y-m-d'),
            ],
            [
                'year'       => 2025,
                'tarrif_one' => 46.360,
                'tarrif_two' => 51.880,
                'title'      => 'negative',
                'date'       => date('Y-m-d'),
            ],           
        ]);
     
    }
}

