<?php

namespace Database\Seeders;

use App\Structure\ForecastSection\Admin\Models\Forecastcommunal;
use Illuminate\Database\Seeder;

class ForecastCommunalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //id из таблицы users
        $users = [
            3, 4, 5, 6, 7, 8,
            9, 10, 11, 12, 13,
            14, 15, 16, 17, 18,
            19, 20, 21, 22, 23,
            ];
        
        foreach ($users as $user) {
            Forecastcommunal::insert([
                [
                    'user_id'    => $user,
                    'volume_one' => 0,
                    'volume_two' => 0,
                    'sum_one'    => 0,
                    'sum_two'    => 0,
                    'chapter'    => 'heat',
                ],
                [
                    'user_id'    => $user,
                    'volume_one' => 0,
                    'volume_two' => 0,
                    'sum_one'    => 0,
                    'sum_two'    => 0,
                    'chapter'    => 'water',
                ],
                [
                    'user_id'    => $user,
                    'volume_one' => 0,
                    'volume_two' => 0,
                    'sum_one'    => 0,
                    'sum_two'    => 0,
                    'chapter'    => 'drainage',
                ],
                [
                    'user_id'    => $user,
                    'volume_one' => 0,
                    'volume_two' => 0,
                    'sum_one'    => 0,
                    'sum_two'    => 0,
                    'chapter'    => 'energy',
                ],
                [
                    'user_id'    => $user,
                    'volume_one' => 0,
                    'volume_two' => 0,
                    'sum_one'    => 0,
                    'sum_two'    => 0,
                    'chapter'    => 'trash',
                ],
                [
                    'user_id'    => $user,
                    'volume_one' => 0,
                    'volume_two' => 0,
                    'sum_one'    => 0,
                    'sum_two'    => 0,
                    'chapter'    => 'negative',
                ],           
            ]);
        }
     
    }
}

