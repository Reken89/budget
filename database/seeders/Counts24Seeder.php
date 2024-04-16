<?php

namespace Database\Seeders;

use App\Structure\Count24Section\Admin\Models\Count24;
use Illuminate\Database\Seeder;

class Counts24Seeder extends Seeder
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
            9, 10, 11, 12, 13,
            14, 15, 18, 19, 8,
            36, 23, 37, 38, 35,
            25, 27, 28, 29, 26,
            53, 54, 55, 56, 57,
            58, 59, 60, 61, 62,
            63, 64, 65, 66, 67,
            68,
        ];
        
        foreach ($users as $user) {
            for ($year = 2025; $year < 2028; $year++){
                for ($ekr = 1; $ekr < 242; $ekr++){
                    Count24::create([
                        'user_id' => $user,
                        'ekr_id'  => $ekr,
                        'year'    => $year,
                        'status'  => 2,
                        'sum_fu'  => 0, 
                        'sum_cb'  => 0,   
                    ]); 
                }                
            }           
        }
               
    }       
}

