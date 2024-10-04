<?php

namespace Database\Seeders;

use App\Structure\CommunalSection\User\Models\Point;
use Illuminate\Database\Seeder;

class PointsSeeder extends Seeder
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
            3, 4, 5, 7, 8, 9, 10, 12, 13,
            15, 16, 17, 18, 19, 20, 21, 22, 23
            ];
                
        //Добавляем значения в таблицу communal
        foreach ($users as $user) {
            Point::create([
                'user_id'         => $user,
                'mounth'          => '09',
                'points'          => 0,
            ]);                                                        
        }
    }       
}

