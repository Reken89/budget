<?php

namespace Database\Seeders;

use App\Structure\UtilitiesSection\Admin\Models\Limit;
use App\Structure\CommunalSection\User\Models\Tarrifs;
use Illuminate\Database\Seeder;

class LimitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($year = 2018; $year < 2026; $year++){
            for($mounth = 1; $mounth < 13; $mounth++){
                $tarrifs = Tarrifs::select()    
                    ->where('year', $year)
                    ->where('mounth', $mounth) 
                    ->first()
                    ->toArray();
                
                Limit::insert([
                    [
                        'year'       => $year,
                        'mounth'     => $mounth,
                        'tarrif_min' => $tarrifs['heat-one'],
                        'tarrif_max' => $tarrifs['heat-two'],
                        'title'      => 'heat',
                        'date'       => '2025-01-01',
                    ],
                    [
                        'year'       => $year,
                        'mounth'     => $mounth,
                        'tarrif_min' => $tarrifs['water-one'],
                        'tarrif_max' => $tarrifs['water-two'],
                        'title'      => 'water',
                        'date'       => '2025-01-01',
                    ],
                    [
                        'year'       => $year,
                        'mounth'     => $mounth,
                        'tarrif_min' => $tarrifs['drainage-one'],
                        'tarrif_max' => $tarrifs['drainage-two'],
                        'title'      => 'drainage',
                        'date'       => '2025-01-01',
                    ],
                    [
                        'year'       => $year,
                        'mounth'     => $mounth,
                        'tarrif_min' => $tarrifs['power-one'],
                        'tarrif_max' => $tarrifs['power-two'],
                        'title'      => 'energy',
                        'date'       => '2025-01-01',
                    ],
                    [
                        'year'       => $year,
                        'mounth'     => $mounth,
                        'tarrif_min' => $tarrifs['trash-one'],
                        'tarrif_max' => $tarrifs['trash-two'],
                        'title'      => 'trash',
                        'date'       => '2025-01-01',
                    ],
                    [
                        'year'       => $year,
                        'mounth'     => $mounth,
                        'tarrif_min' => $tarrifs['negative-one'],
                        'tarrif_max' => $tarrifs['negative-two'],
                        'title'      => 'negative',
                        'date'       => '2025-01-01',
                    ],           
                ]);
            }
        }
            
    }
}