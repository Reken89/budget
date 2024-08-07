<?php

namespace Database\Seeders;

use App\Structure\Count24Section\Admin\Models\Count24;
use Illuminate\Database\Seeder;

class HelpCount24Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {             
        // id пропущенных учреждений
        $users = [                         
            53, 54, 55, 56, 57,
            58, 59, 60, 61, 62,
            63, 64, 65, 66, 67,
            68,
        ];     
        
        // Добавляем пропущенную информацию в Counts24
        foreach ($users as $user) {
            for ($year = 2025; $year < 2028; $year++){
                Count24::create([
                    'user_id' => $user,
                    'ekr_id'  => 242,
                    'year'    => $year,
                    'status'  => 2,
                    'sum_fu'  => 0,
                    'sum_cb'  => 0, 
                ]);                
            }                                             
        }
        
        // Добавляем пропущенную информацию в Counts24
        foreach ($users as $user) {
            for ($year = 2025; $year < 2028; $year++){
                Count24::create([
                    'user_id' => $user,
                    'ekr_id'  => 243,
                    'year'    => $year,
                    'status'  => 2,
                    'sum_fu'  => 0,
                    'sum_cb'  => 0, 
                ]);                
            }                                             
        }
    }       
}

