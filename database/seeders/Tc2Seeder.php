<?php

namespace Database\Seeders;

use App\Structure\CSection\Admin\Models\TableTwo;
use Illuminate\Database\Seeder;

class Tc2Seeder extends Seeder
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
            3, 4, 5, 7,
            8, 9, 10, 12,
            13, 15, 29
            ];
        
        foreach ($users as $user) {
            for ($ind = 53; $ind < 165; $ind++){
                for ($year = 2024; $year < 2026; $year++){
                    for ($mounth = 1; $mounth < 13; $mounth++){
                        TableTwo::create([
                            'user_id'      => $user,
                            'indicator_id' => $ind,
                            'year'         => $year,
                            'mounth'       => $mounth,
                            'status'       => 2,
                            'meaning1'     => 0,
                            'meaning2'     => 0,                          
                        ]);                           
                    }
                }                   
            }               
        }
    }       
}

