<?php

namespace Database\Seeders;

use App\Structure\Ofs24Section\Admin\Models\Ofs24;
use Illuminate\Database\Seeder;

class Ofs24Seeder extends Seeder
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
            9, 10, 11, 12, 13,
            14, 15, 16, 17, 18,
            19, 20, 21, 22, 23,
            25, 26, 27, 28, 29
            ];
        
        foreach ($users as $user) {
            for ($ekr = 1; $ekr < 241; $ekr++){
                for ($mounth = 1; $mounth < 13; $mounth++){
                    for ($chapter = 1; $chapter < 6; $chapter++){
                        Ofs24::create([
                            'user_id'          => $user,
                            'ekr_id'           => $ekr,
                            'year'             => 2024,
                            'mounth'           => $mounth,
                            'chapter'          => $chapter,
                            'status'           => 2,
                            'lbo'              => 0,
                            'prepaid'          => 0,
                            'credit_year_all'  => 0,
                            'credit_year_term' => 0,
                            'debit_year_all'   => 0,
                            'debit_year_term'  => 0,
                            'fact_all'         => 0,
                            'fact_mounth'      => 0,
                            'kassa_all'        => 0,
                            'kassa_mounth'     => 0,
                            'credit_end_all'   => 0,
                            'credit_end_term'  => 0,
                            'debit_end_all'    => 0,
                            'debit_end_term'   => 0,
                            'return_old_year'  => 0,                               
                        ]);                           
                    }
                }                   
            }               
        }
    }       
}
   





