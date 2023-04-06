<?php

namespace Database\Seeders;

use App\Structure\CountSection\Admin\Models\Count;
use Illuminate\Database\Seeder;

class CountsSeeder extends Seeder
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
            25, 27, 28, 29, 26
        ];
        
        foreach ($users as $user) {
            for ($year = 2024; $year < 2027; $year++){
                for ($ekr = 1; $ekr < 241; $ekr++){
                    Count::create([
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

