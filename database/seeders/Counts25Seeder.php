<?php

namespace Database\Seeders;

use App\Structure\Count25Section\Admin\Models\Count25;
use Illuminate\Database\Seeder;

class Counts25Seeder extends Seeder
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
            9, 10, 13,
            15, 18, 19, 8,
            36, 23, 37, 38, 35,
            27, 28, 29, 26,
            53, 54, 55, 56, 57,
            58, 59, 60, 61, 62,
            63, 64, 65, 66, 67,
            68, 73, 74
        ];
        
        foreach ($users as $user) {
            for ($year = 2026; $year < 2029; $year++){
                for ($ekr = 1; $ekr < 244; $ekr++){
                    Count25::create([
                        'user_id' => $user,
                        'ekr_id'  => $ekr,
                        'year'    => $year,
                        'status'  => 2,
                        'sum_fu'  => 0, 
                        'sum_cb'  => 0,  
                        'date_fu' => date('Y-m-d'),
                        'date_cb' => date('Y-m-d'),
                    ]); 
                }                
            }           
        }
               
    }       
}

