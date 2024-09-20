<?php

namespace Database\Seeders;

use App\Structure\Ofs24Section\Admin\Models\Ofs24;
use App\Structure\Ofs2024Section\User\Models\Ofs243;
use Illuminate\Database\Seeder;

class Ofs243Seeder extends Seeder
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
            9, 10, 12, 13,
            15, 16, 17, 18,
            19, 20, 21, 22,
            23, 25, 26, 27,
            28, 29, 11, 14,
            ];
        
        foreach ($users as $user) {
            for ($ekr = 1; $ekr < 244; $ekr++){
                for ($mounth = 1; $mounth < 13; $mounth++){
                 
                    if($mounth < 9){    
                        $info = Ofs24::select()  
                            ->where('user_id', $user)
                            ->where('ekr_id', $ekr)
                            ->where('mounth', $mounth) 
                            ->where('chapter', 3)     
                            ->first()
                            ->toArray();

                        Ofs243::create([
                            'user_id'          => $user,
                            'ekr_id'           => $ekr,
                            'mounth'           => $mounth,
                            'status'           => $info['status'],
                            'lbo'              => $info['lbo'],
                            'prepaid'          => $info['prepaid'],
                            'credit_year_all'  => $info['credit_year_all'],
                            'credit_year_term' => $info['credit_year_term'],
                            'debit_year_all'   => $info['debit_year_all'],
                            'debit_year_term'  => $info['debit_year_term'],
                            'fact_all'         => $info['fact_all'],
                            'fact_mounth'      => $info['fact_mounth'],
                            'kassa_all'        => $info['kassa_all'],
                            'kassa_mounth'     => $info['kassa_mounth'],
                            'credit_end_all'   => $info['credit_end_all'],
                            'credit_end_term'  => $info['credit_end_term'],
                            'debit_end_all'    => $info['debit_end_all'],
                            'debit_end_term'   => $info['debit_end_term'],
                            'return_old_year'  => $info['return_old_year'],                              
                        ]); 
                    }else{
                        Ofs243::create([
                            'user_id'          => $user,
                            'ekr_id'           => $ekr,
                            'mounth'           => $mounth,
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