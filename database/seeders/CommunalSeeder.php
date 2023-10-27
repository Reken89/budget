<?php

namespace Database\Seeders;

use App\Structure\CommunalSection\User\Models\Communal;
use Illuminate\Database\Seeder;

class CommunalSeeder extends Seeder
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
            3, 4, 5, 7, 8, 9, 10, 11, 12, 13, 14,
            15, 16, 17, 18, 19, 20, 21, 22, 23
            ];
                
        //Добавляем значения в таблицу communal
        foreach ($users as $user) {
            for ($mounth = 1; $mounth < 13; $mounth++){
                Communal::create([
                    'user_id'         => $user,
                    'year'            => 2024,
                    'mounth'          => $mounth,
                    'status'          => 2,
                    'heat-volume'     => 0,
                    'heat-sum'        => 0,
                    'drainage-volume' => 0,
                    'drainage-sum'    => 0,
                    'negative-volume' => 0,
                    'negative-sum'    => 0,
                    'water-volume'    => 0,
                    'water-sum'       => 0,
                    'power-volume'    => 0,
                    'power-sum'       => 0,
                    'trash-volume'    => 0,
                    'trash-sum'       => 0,
                    'disposal-volume' => 0,
                    'disposal-sum'    => 0,
                ]);               
            }                                             
        }
    }       
}
