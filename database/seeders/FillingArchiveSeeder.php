<?php

namespace Database\Seeders;

use App\Structure\OfsSection\User\Models\Ofs;
use App\Structure\APISection\Models\Archive;
use Illuminate\Database\Seeder;

class FillingArchiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($m = 1; $m < 13; $m++){
            //Получаем информацию ОФС
            $info = Ofs::select()
                ->where('mounth', $m) 
                ->get()
                ->toArray();

            //Добавляем значения в таблицу communal
            foreach ($info as $value) {
                Archive::create([
                    'user_id'          => $value['user_id'],
                    'ekr_id'           => $value['ekr_id'],
                    'year'             => $value['year'],
                    'mounth'           => $value['mounth'],
                    'chapter'          => $value['chapter'],
                    'status'           => 1,
                    'lbo'              => $value['lbo'],
                    'prepaid'          => $value['prepaid'],
                    'credit_year_all'  => $value['credit_year_all'],
                    'credit_year_term' => $value['credit_year_term'],
                    'debit_year_all'   => $value['debit_year_all'],
                    'debit_year_term'  => $value['debit_year_term'],
                    'fact_all'         => $value['fact_all'],
                    'fact_mounth'      => $value['fact_mounth'],
                    'kassa_all'        => $value['kassa_all'],
                    'kassa_mounth'     => $value['kassa_mounth'],
                    'credit_end_all'   => $value['credit_end_all'],
                    'credit_end_term'  => $value['credit_end_term'],
                    'debit_end_all'    => $value['debit_end_all'],
                    'debit_end_term'   => $value['debit_end_term'],
                    'return_old_year'  => $value['return_old_year'],
                ]);                                                                      
            }
        }
    }       
}

