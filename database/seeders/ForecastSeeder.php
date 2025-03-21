<?php

namespace Database\Seeders;

use App\Structure\Forecast25Section\Admin\Models\Forecast;
use Illuminate\Database\Seeder;

class ForecastSeeder extends Seeder
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
            3, 4, 5, 7, 8,
            9, 10, 13,
            15, 16, 17, 18,
            19, 20, 21, 22, 23,
            ];
        
        foreach ($users as $user) {
            Forecast::insert([
                [
                    'year'       => 2025,
                    'user_id'    => $user,
                    'volume_one' => 0,
                    'volume_two' => 0,
                    'sum_one'    => 0,
                    'sum_two'    => 0,
                    'title'      => 'heat',
                    'date'       => date('Y-m-d'),
                ],
                [
                    'year'       => 2025,
                    'user_id'    => $user,
                    'volume_one' => 0,
                    'volume_two' => 0,
                    'sum_one'    => 0,
                    'sum_two'    => 0,
                    'title'      => 'water',
                    'date'       => date('Y-m-d'),
                ],
                [
                    'year'       => 2025,
                    'user_id'    => $user,
                    'volume_one' => 0,
                    'volume_two' => 0,
                    'sum_one'    => 0,
                    'sum_two'    => 0,
                    'title'      => 'drainage',
                    'date'       => date('Y-m-d'),
                ],
                [
                    'year'       => 2025,
                    'user_id'    => $user,
                    'volume_one' => 0,
                    'volume_two' => 0,
                    'sum_one'    => 0,
                    'sum_two'    => 0,
                    'title'      => 'energy',
                    'date'       => date('Y-m-d'),
                ],
                [
                    'year'       => 2025,
                    'user_id'    => $user,
                    'volume_one' => 0,
                    'volume_two' => 0,
                    'sum_one'    => 0,
                    'sum_two'    => 0,
                    'title'      => 'trash',
                    'date'       => date('Y-m-d'),
                ],
                [
                    'year'       => 2025,
                    'user_id'    => $user,
                    'volume_one' => 0,
                    'volume_two' => 0,
                    'sum_one'    => 0,
                    'sum_two'    => 0,
                    'title'      => 'negative',
                    'date'       => date('Y-m-d'),
                ],           
            ]);
        }
     
    }
}

