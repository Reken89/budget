<?php

namespace Database\Seeders;

use App\Structure\Ofs2024Section\User\Models\Ofs241;
use App\Structure\Ofs2024Section\User\Models\Ofs242;
use App\Structure\Ofs2024Section\User\Models\Ofs243;
use App\Structure\Ofs2024Section\User\Models\Ofs244;
use App\Structure\Ofs2024Section\User\Models\Ofs245;
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
        $bd = [
            '1' => new Ofs241,
            '2' => new Ofs242,
            '3' => new Ofs243,
            '4' => new Ofs244,
            '5' => new Ofs245,
        ];
        
        for($chapter = 1; $chapter < 6; $chapter++){
            for($m = 1; $m < 13; $m++){
                //Получаем информацию ОФС
                $info = $bd[$chapter]::select()
                    ->where('mounth', $m) 
                    ->get()
                    ->toArray();

                //Добавляем значения в таблицу communal
                foreach ($info as $value) {
                    Archive::create([
                        'user_id'          => $value['user_id'],
                        'ekr_id'           => $value['ekr_id'],
                        'year'             => 2024,
                        'mounth'           => $value['mounth'],
                        'chapter'          => $chapter,
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
}

