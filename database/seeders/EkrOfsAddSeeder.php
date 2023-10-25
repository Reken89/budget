<?php

namespace Database\Seeders;

use App\Structure\OfsSection\User\Models\Ekr;
use Illuminate\Database\Seeder;

class EkrOfsAddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id из таблицы users (Для таблицы ОФС)
        $users = [
            3, 4, 5, 6, 7, 8,
            9, 10, 11, 12, 13,
            14, 15, 16, 17, 18,
            19, 20, 21, 22, 23,
            25, 26, 27, 28, 29
            ];
        
        //id из таблицы users (Для таблицы ОФС 2024)
        $users24 = [
            3, 4, 5, 7, 8,
            9, 10, 11, 12, 13,
            14, 15, 16, 17, 18,
            19, 20, 21, 22, 23,
            25, 26, 27, 28, 29
            ];
        
        //id из таблицы users (Для таблицы СМЕТА)
        $users_smeta = [
            8, 9, 10, 11, 12,
            13, 14, 15, 18, 19,
            23, 25, 26, 27, 28, 
            29, 35, 36, 37, 38
            ];
 
        // Добавляем значения в таблице Ekr
        $ekr = Ekr::create([
            'shared' => 'No',
            'main'   => 'No',
            'number' => 17,
            'ekr'    => 241,
            'title'  => 'На иные цели на денежную компенсацию арендной платы по договорам аренды (найма) жилья педагогическим работникам муниципальных общеобразовательных организаций Костомукшского городского округа',
        ]);
        
        // Через связи добавляем значение в таблицу Ofs
        foreach ($users as $user) {
            for ($mounth = 1; $mounth < 13; $mounth++){
                for ($chapter = 1; $chapter < 6; $chapter++){
                    $ekr->ofs()->create([
                        'user_id'          => $user,
                        'year'             => 2023,
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
        
        // Через связи добавляем значение в таблицу Ofs 2024
        foreach ($users24 as $user24) {
            for ($mounth = 1; $mounth < 13; $mounth++){
                for ($chapter = 1; $chapter < 6; $chapter++){
                    $ekr->ofs24()->create([
                        'user_id'          => $user24,
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
        
        // Через связи добавляем значение в таблицу Counts
        foreach ($users_smeta as $smeta) {
            for ($year = 2024; $year < 2027; $year++){
                $ekr->count()->create([
                    'user_id' => $smeta,
                    'year'    => $year,
                    'status'  => 1,
                    'sum_fu'  => 0,
                    'sum_cb'  => 0, 
                ]);                
            }                                             
        }
    }       
}

